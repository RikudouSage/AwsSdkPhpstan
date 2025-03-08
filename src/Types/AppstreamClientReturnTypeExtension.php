<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AppstreamClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Appstream\AppstreamClient>
     */
    public function getClass(): string
    {
        return \Aws\Appstream\AppstreamClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateAppBlockBuilderAppBlock',
            'associateApplicationFleet',
            'associateApplicationToEntitlement',
            'associateFleet',
            'batchAssociateUserStack',
            'batchDisassociateUserStack',
            'copyImage',
            'createAppBlock',
            'createAppBlockBuilder',
            'createAppBlockBuilderStreamingURL',
            'createApplication',
            'createDirectoryConfig',
            'createEntitlement',
            'createFleet',
            'createImageBuilder',
            'createImageBuilderStreamingURL',
            'createStack',
            'createStreamingURL',
            'createThemeForStack',
            'createUpdatedImage',
            'createUsageReportSubscription',
            'createUser',
            'deleteAppBlock',
            'deleteAppBlockBuilder',
            'deleteApplication',
            'deleteDirectoryConfig',
            'deleteEntitlement',
            'deleteFleet',
            'deleteImage',
            'deleteImageBuilder',
            'deleteImagePermissions',
            'deleteStack',
            'deleteThemeForStack',
            'deleteUsageReportSubscription',
            'deleteUser',
            'describeAppBlockBuilderAppBlockAssociations',
            'describeAppBlockBuilders',
            'describeAppBlocks',
            'describeApplicationFleetAssociations',
            'describeApplications',
            'describeDirectoryConfigs',
            'describeEntitlements',
            'describeFleets',
            'describeImageBuilders',
            'describeImagePermissions',
            'describeImages',
            'describeSessions',
            'describeStacks',
            'describeThemeForStack',
            'describeUsageReportSubscriptions',
            'describeUserStackAssociations',
            'describeUsers',
            'disableUser',
            'disassociateAppBlockBuilderAppBlock',
            'disassociateApplicationFleet',
            'disassociateApplicationFromEntitlement',
            'disassociateFleet',
            'enableUser',
            'expireSession',
            'listAssociatedFleets',
            'listAssociatedStacks',
            'listEntitledApplications',
            'listTagsForResource',
            'startAppBlockBuilder',
            'startFleet',
            'startImageBuilder',
            'stopAppBlockBuilder',
            'stopFleet',
            'stopImageBuilder',
            'tagResource',
            'untagResource',
            'updateAppBlockBuilder',
            'updateApplication',
            'updateDirectoryConfig',
            'updateEntitlement',
            'updateFleet',
            'updateImagePermissions',
            'updateStack',
            'updateThemeForStack',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateAppBlockBuilderAppBlock' => $this->associateAppBlockBuilderAppBlock(),
            'associateApplicationFleet' => $this->associateApplicationFleet(),
            'associateApplicationToEntitlement' => $this->associateApplicationToEntitlement(),
            'associateFleet' => $this->associateFleet(),
            'batchAssociateUserStack' => $this->batchAssociateUserStack(),
            'batchDisassociateUserStack' => $this->batchDisassociateUserStack(),
            'copyImage' => $this->copyImage(),
            'createAppBlock' => $this->createAppBlock(),
            'createAppBlockBuilder' => $this->createAppBlockBuilder(),
            'createAppBlockBuilderStreamingURL' => $this->createAppBlockBuilderStreamingURL(),
            'createApplication' => $this->createApplication(),
            'createDirectoryConfig' => $this->createDirectoryConfig(),
            'createEntitlement' => $this->createEntitlement(),
            'createFleet' => $this->createFleet(),
            'createImageBuilder' => $this->createImageBuilder(),
            'createImageBuilderStreamingURL' => $this->createImageBuilderStreamingURL(),
            'createStack' => $this->createStack(),
            'createStreamingURL' => $this->createStreamingURL(),
            'createThemeForStack' => $this->createThemeForStack(),
            'createUpdatedImage' => $this->createUpdatedImage(),
            'createUsageReportSubscription' => $this->createUsageReportSubscription(),
            'createUser' => $this->createUser(),
            'deleteAppBlock' => $this->deleteAppBlock(),
            'deleteAppBlockBuilder' => $this->deleteAppBlockBuilder(),
            'deleteApplication' => $this->deleteApplication(),
            'deleteDirectoryConfig' => $this->deleteDirectoryConfig(),
            'deleteEntitlement' => $this->deleteEntitlement(),
            'deleteFleet' => $this->deleteFleet(),
            'deleteImage' => $this->deleteImage(),
            'deleteImageBuilder' => $this->deleteImageBuilder(),
            'deleteImagePermissions' => $this->deleteImagePermissions(),
            'deleteStack' => $this->deleteStack(),
            'deleteThemeForStack' => $this->deleteThemeForStack(),
            'deleteUsageReportSubscription' => $this->deleteUsageReportSubscription(),
            'deleteUser' => $this->deleteUser(),
            'describeAppBlockBuilderAppBlockAssociations' => $this->describeAppBlockBuilderAppBlockAssociations(),
            'describeAppBlockBuilders' => $this->describeAppBlockBuilders(),
            'describeAppBlocks' => $this->describeAppBlocks(),
            'describeApplicationFleetAssociations' => $this->describeApplicationFleetAssociations(),
            'describeApplications' => $this->describeApplications(),
            'describeDirectoryConfigs' => $this->describeDirectoryConfigs(),
            'describeEntitlements' => $this->describeEntitlements(),
            'describeFleets' => $this->describeFleets(),
            'describeImageBuilders' => $this->describeImageBuilders(),
            'describeImagePermissions' => $this->describeImagePermissions(),
            'describeImages' => $this->describeImages(),
            'describeSessions' => $this->describeSessions(),
            'describeStacks' => $this->describeStacks(),
            'describeThemeForStack' => $this->describeThemeForStack(),
            'describeUsageReportSubscriptions' => $this->describeUsageReportSubscriptions(),
            'describeUserStackAssociations' => $this->describeUserStackAssociations(),
            'describeUsers' => $this->describeUsers(),
            'disableUser' => $this->disableUser(),
            'disassociateAppBlockBuilderAppBlock' => $this->disassociateAppBlockBuilderAppBlock(),
            'disassociateApplicationFleet' => $this->disassociateApplicationFleet(),
            'disassociateApplicationFromEntitlement' => $this->disassociateApplicationFromEntitlement(),
            'disassociateFleet' => $this->disassociateFleet(),
            'enableUser' => $this->enableUser(),
            'expireSession' => $this->expireSession(),
            'listAssociatedFleets' => $this->listAssociatedFleets(),
            'listAssociatedStacks' => $this->listAssociatedStacks(),
            'listEntitledApplications' => $this->listEntitledApplications(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startAppBlockBuilder' => $this->startAppBlockBuilder(),
            'startFleet' => $this->startFleet(),
            'startImageBuilder' => $this->startImageBuilder(),
            'stopAppBlockBuilder' => $this->stopAppBlockBuilder(),
            'stopFleet' => $this->stopFleet(),
            'stopImageBuilder' => $this->stopImageBuilder(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAppBlockBuilder' => $this->updateAppBlockBuilder(),
            'updateApplication' => $this->updateApplication(),
            'updateDirectoryConfig' => $this->updateDirectoryConfig(),
            'updateEntitlement' => $this->updateEntitlement(),
            'updateFleet' => $this->updateFleet(),
            'updateImagePermissions' => $this->updateImagePermissions(),
            'updateStack' => $this->updateStack(),
            'updateThemeForStack' => $this->updateThemeForStack(),
        };
    }
    private function associateAppBlockBuilderAppBlock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppBlockBuilderAppBlockAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppBlockArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppBlockBuilderName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function associateApplicationFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationFleetAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FleetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function associateApplicationToEntitlement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function batchAssociateUserStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserStackAssociation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SendEmailNotification'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                            new \PHPStan\Type\Constant\ConstantStringType('USERPOOL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_AD'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STACK_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('USER_NAME_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchDisassociateUserStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UserStackAssociation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('SendEmailNotification'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                            new \PHPStan\Type\Constant\ConstantStringType('USERPOOL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_AD'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STACK_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('USER_NAME_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function copyImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DestinationImageName'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAppBlock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppBlock'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceS3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('SetupScriptDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostSetupScriptDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackagingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppBlockErrors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScriptS3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutablePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutableParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeoutInSeconds'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScriptS3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutablePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutableParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeoutInSeconds'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPSTREAM2'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createAppBlockBuilder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppBlockBuilder'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDefaultInternetAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppBlockBuilderErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpceId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createAppBlockBuilderStreamingURL(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamingURL'),
                new \PHPStan\Type\Constant\ConstantStringType('Expires'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Application'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IconURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppBlockArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IconS3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platforms'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceFamilies'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                        new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createDirectoryConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitDistinguishedNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateBasedAuthProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountPassword'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArn'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED_NO_DIRECTORY_LOGIN_FALLBACK'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createEntitlement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entitlement'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppVisibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Fleet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('FleetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComputeCapacityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxUserDurationInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisconnectTimeoutInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FleetErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDefaultInternetAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainJoinInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdleDisconnectTimeoutInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamView'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrentSessions'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsbDeviceFilterStrings'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionScriptS3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSessionsPerInstance'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALWAYS_ON'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELASTIC'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Desired'),
                        new \PHPStan\Type\Constant\ConstantStringType('Running'),
                        new \PHPStan\Type\Constant\ConstantStringType('InUse'),
                        new \PHPStan\Type\Constant\ConstantStringType('Available'),
                        new \PHPStan\Type\Constant\ConstantStringType('DesiredUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailableUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActualUserSessions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitDistinguishedName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('DESKTOP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                        new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createImageBuilder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImageBuilder'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDefaultInternetAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainJoinInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkAccessConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageBuilderErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppstreamAgentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestAppstreamAgentVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                        new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING_AGENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_QUALIFICATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_UNAVAILABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitDistinguishedName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EniPrivateIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpceId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createImageBuilderStreamingURL(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamingURL'),
                new \PHPStan\Type\Constant\ConstantStringType('Expires'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Stack'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageConnectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedirectURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('FeedbackURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmbedHostDomains'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamingExperienceSettings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Domains'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainsRequireAdminConsent'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HOMEFOLDERS'),
                            new \PHPStan\Type\Constant\ConstantStringType('GOOGLE_DRIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DRIVE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STORAGE_CONNECTOR_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumLength'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLIPBOARD_COPY_FROM_LOCAL_DEVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLIPBOARD_COPY_TO_LOCAL_DEVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FILE_UPLOAD'),
                            new \PHPStan\Type\Constant\ConstantStringType('FILE_DOWNLOAD'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRINTING_TO_LOCAL_DEVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_PASSWORD_SIGNIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_SMART_CARD_SIGNIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_TIME_ZONE_REDIRECTION'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('SettingsGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpceId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PreferredProtocol'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createStreamingURL(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamingURL'),
                new \PHPStan\Type\Constant\ConstantStringType('Expires'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createThemeForStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Theme'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeTitleText'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeStyling'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeFooterLinks'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeOrganizationLogoURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeFaviconURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LIGHT_BLUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BLUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PINK'),
                        new \PHPStan\Type\Constant\ConstantStringType('RED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('FooterLinkURL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createUpdatedImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('image'),
                new \PHPStan\Type\Constant\ConstantStringType('canUpdateImage'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BaseImageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageBuilderSupported'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageBuilderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Applications'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublicBaseImageReleasedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppstreamAgentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImagePermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestAppstreamAgentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedInstanceFamilies'),
                    new \PHPStan\Type\Constant\ConstantStringType('DynamicAppProvidersEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageSharedWithOthers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                        new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_BUILDER_NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_COPY_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('IconURL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AppBlockArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IconS3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('Platforms'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceFamilies'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                            new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowFleet'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowImageBuilder'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                    ]),
                ]),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function createUsageReportSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
            ]),
        ]);
    }
    private function createUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAppBlock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAppBlockBuilder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDirectoryConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEntitlement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Image'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BaseImageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageBuilderSupported'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageBuilderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Applications'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublicBaseImageReleasedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppstreamAgentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImagePermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestAppstreamAgentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedInstanceFamilies'),
                    new \PHPStan\Type\Constant\ConstantStringType('DynamicAppProvidersEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageSharedWithOthers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                        new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_BUILDER_NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_COPY_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('IconURL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AppBlockArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IconS3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('Platforms'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceFamilies'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                            new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowFleet'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowImageBuilder'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteImageBuilder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImageBuilder'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDefaultInternetAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainJoinInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkAccessConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageBuilderErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppstreamAgentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestAppstreamAgentVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                        new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING_AGENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_QUALIFICATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_UNAVAILABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitDistinguishedName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EniPrivateIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpceId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteImagePermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteThemeForStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteUsageReportSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAppBlockBuilderAppBlockAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppBlockBuilderAppBlockAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppBlockArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppBlockBuilderName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAppBlockBuilders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppBlockBuilders'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDefaultInternetAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppBlockBuilderErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpceId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAppBlocks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppBlocks'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceS3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('SetupScriptDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostSetupScriptDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackagingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppBlockErrors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScriptS3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutablePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutableParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeoutInSeconds'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScriptS3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutablePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutableParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeoutInSeconds'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPSTREAM2'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeApplicationFleetAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationFleetAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FleetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Applications'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IconURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppBlockArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IconS3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platforms'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceFamilies'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                        new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDirectoryConfigs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitDistinguishedNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateBasedAuthProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountPassword'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArn'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED_NO_DIRECTORY_LOGIN_FALLBACK'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEntitlements(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entitlements'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppVisibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeFleets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Fleets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('FleetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComputeCapacityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxUserDurationInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisconnectTimeoutInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FleetErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDefaultInternetAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainJoinInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdleDisconnectTimeoutInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamView'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrentSessions'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsbDeviceFilterStrings'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionScriptS3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSessionsPerInstance'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALWAYS_ON'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELASTIC'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Desired'),
                        new \PHPStan\Type\Constant\ConstantStringType('Running'),
                        new \PHPStan\Type\Constant\ConstantStringType('InUse'),
                        new \PHPStan\Type\Constant\ConstantStringType('Available'),
                        new \PHPStan\Type\Constant\ConstantStringType('DesiredUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailableUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActualUserSessions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitDistinguishedName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('DESKTOP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                        new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeImageBuilders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImageBuilders'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDefaultInternetAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainJoinInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkAccessConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageBuilderErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppstreamAgentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestAppstreamAgentVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                        new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING_AGENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_QUALIFICATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_UNAVAILABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitDistinguishedName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EniPrivateIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpceId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeImagePermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('SharedImagePermissionsList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('sharedAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('imagePermissions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowFleet'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowImageBuilder'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeImages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Images'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BaseImageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageBuilderSupported'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageBuilderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Applications'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublicBaseImageReleasedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppstreamAgentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImagePermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestAppstreamAgentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedInstanceFamilies'),
                    new \PHPStan\Type\Constant\ConstantStringType('DynamicAppProvidersEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageSharedWithOthers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHARED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                        new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_BUILDER_NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_COPY_FAILURE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('IconURL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AppBlockArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IconS3Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('Platforms'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceFamilies'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                            new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowFleet'),
                        new \PHPStan\Type\Constant\ConstantStringType('allowImageBuilder'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Sessions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('FleetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionState'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxExpirationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkAccessConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CONNECTED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('API'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('USERPOOL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_AD'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EniPrivateIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeStacks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Stacks'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageConnectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedirectURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('FeedbackURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmbedHostDomains'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamingExperienceSettings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Domains'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainsRequireAdminConsent'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HOMEFOLDERS'),
                            new \PHPStan\Type\Constant\ConstantStringType('GOOGLE_DRIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DRIVE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STORAGE_CONNECTOR_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumLength'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLIPBOARD_COPY_FROM_LOCAL_DEVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLIPBOARD_COPY_TO_LOCAL_DEVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FILE_UPLOAD'),
                            new \PHPStan\Type\Constant\ConstantStringType('FILE_DOWNLOAD'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRINTING_TO_LOCAL_DEVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_PASSWORD_SIGNIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_SMART_CARD_SIGNIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_TIME_ZONE_REDIRECTION'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('SettingsGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpceId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PreferredProtocol'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeThemeForStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Theme'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeTitleText'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeStyling'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeFooterLinks'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeOrganizationLogoURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeFaviconURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LIGHT_BLUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BLUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PINK'),
                        new \PHPStan\Type\Constant\ConstantStringType('RED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('FooterLinkURL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeUsageReportSubscriptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UsageReportSubscriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastGeneratedReportDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionErrors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('DAILY'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeUserStackAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserStackAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SendEmailNotification'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('API'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('USERPOOL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_AD'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirstName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('API'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('USERPOOL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_AD'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disableUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateAppBlockBuilderAppBlock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateApplicationFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateApplicationFromEntitlement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function expireSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function listAssociatedFleets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Names'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssociatedStacks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Names'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEntitledApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EntitledApplications'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationIdentifier'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
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
    private function startAppBlockBuilder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppBlockBuilder'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDefaultInternetAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppBlockBuilderErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpceId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function startFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startImageBuilder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImageBuilder'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDefaultInternetAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainJoinInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkAccessConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageBuilderErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppstreamAgentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestAppstreamAgentVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                        new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING_AGENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_QUALIFICATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_UNAVAILABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitDistinguishedName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EniPrivateIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpceId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function stopAppBlockBuilder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppBlockBuilder'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDefaultInternetAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppBlockBuilderErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpceId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function stopFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopImageBuilder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImageBuilder'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDefaultInternetAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainJoinInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkAccessConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageBuilderErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppstreamAgentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestAppstreamAgentVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                        new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING_AGENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REBOOTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOTTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_QUALIFICATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_UNAVAILABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitDistinguishedName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EniPrivateIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('EniId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpceId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                    ]),
                ]),
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
    private function updateAppBlockBuilder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppBlockBuilder'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDefaultInternetAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppBlockBuilderErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpceId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Application'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IconURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppBlockArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IconS3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platforms'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceFamilies'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                        new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateDirectoryConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DirectoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitDistinguishedNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateBasedAuthProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountPassword'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateAuthorityArn'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED_NO_DIRECTORY_LOGIN_FALLBACK'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateEntitlement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entitlement'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppVisibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateFleet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Fleet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('FleetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComputeCapacityStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxUserDurationInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisconnectTimeoutInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FleetErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableDefaultInternetAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainJoinInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdleDisconnectTimeoutInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamView'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrentSessions'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsbDeviceFilterStrings'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionScriptS3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxSessionsPerInstance'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALWAYS_ON'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELASTIC'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Desired'),
                        new \PHPStan\Type\Constant\ConstantStringType('Running'),
                        new \PHPStan\Type\Constant\ConstantStringType('InUse'),
                        new \PHPStan\Type\Constant\ConstantStringType('Available'),
                        new \PHPStan\Type\Constant\ConstantStringType('DesiredUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailableUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveUserSessions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActualUserSessions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_INTERFACE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('MACHINE_ROLE_IS_MISSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STS_DISABLED_IN_REGION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SUBNET_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUPS_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('IGW_NOT_ATTACHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLEET_INSTANCE_PROVISIONING_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_FILE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_LOGON_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_INVALID_PARAMETER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_MORE_DATA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_NOT_SUPPORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_NERR_PASSWORD_EXPIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_JOIN_INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DirectoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitDistinguishedName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APP'),
                        new \PHPStan\Type\Constant\ConstantStringType('DESKTOP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2016'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2019'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_SERVER_2022'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_LINUX2'),
                        new \PHPStan\Type\Constant\ConstantStringType('RHEL8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROCKY_LINUX8'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function updateImagePermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Stack'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageConnectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedirectURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('FeedbackURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessEndpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmbedHostDomains'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamingExperienceSettings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Domains'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainsRequireAdminConsent'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HOMEFOLDERS'),
                            new \PHPStan\Type\Constant\ConstantStringType('GOOGLE_DRIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DRIVE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STORAGE_CONNECTOR_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumLength'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLIPBOARD_COPY_FROM_LOCAL_DEVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLIPBOARD_COPY_TO_LOCAL_DEVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FILE_UPLOAD'),
                            new \PHPStan\Type\Constant\ConstantStringType('FILE_DOWNLOAD'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRINTING_TO_LOCAL_DEVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_PASSWORD_SIGNIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOMAIN_SMART_CARD_SIGNIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_TIME_ZONE_REDIRECTION'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('SettingsGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketName'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpceId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PreferredProtocol'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateThemeForStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Theme'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeTitleText'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeStyling'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeFooterLinks'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeOrganizationLogoURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThemeFaviconURL'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LIGHT_BLUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BLUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PINK'),
                        new \PHPStan\Type\Constant\ConstantStringType('RED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('FooterLinkURL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
}