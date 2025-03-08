<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class S3ControlClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\S3Control\S3ControlClient>
     */
    public function getClass(): string
    {
        return \Aws\S3Control\S3ControlClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateAccessGrantsIdentityCenter',
            'createAccessGrant',
            'createAccessGrantsInstance',
            'createAccessGrantsLocation',
            'createAccessPoint',
            'createAccessPointForObjectLambda',
            'createBucket',
            'createJob',
            'createMultiRegionAccessPoint',
            'createStorageLensGroup',
            'deleteAccessGrant',
            'deleteAccessGrantsInstance',
            'deleteAccessGrantsInstanceResourcePolicy',
            'deleteAccessGrantsLocation',
            'deleteAccessPoint',
            'deleteAccessPointForObjectLambda',
            'deleteAccessPointPolicy',
            'deleteAccessPointPolicyForObjectLambda',
            'deleteBucket',
            'deleteBucketLifecycleConfiguration',
            'deleteBucketPolicy',
            'deleteBucketReplication',
            'deleteBucketTagging',
            'deleteJobTagging',
            'deleteMultiRegionAccessPoint',
            'deletePublicAccessBlock',
            'deleteStorageLensConfiguration',
            'deleteStorageLensConfigurationTagging',
            'deleteStorageLensGroup',
            'describeJob',
            'describeMultiRegionAccessPointOperation',
            'dissociateAccessGrantsIdentityCenter',
            'getAccessGrant',
            'getAccessGrantsInstance',
            'getAccessGrantsInstanceForPrefix',
            'getAccessGrantsInstanceResourcePolicy',
            'getAccessGrantsLocation',
            'getAccessPoint',
            'getAccessPointConfigurationForObjectLambda',
            'getAccessPointForObjectLambda',
            'getAccessPointPolicy',
            'getAccessPointPolicyForObjectLambda',
            'getAccessPointPolicyStatus',
            'getAccessPointPolicyStatusForObjectLambda',
            'getBucket',
            'getBucketLifecycleConfiguration',
            'getBucketPolicy',
            'getBucketReplication',
            'getBucketTagging',
            'getBucketVersioning',
            'getDataAccess',
            'getJobTagging',
            'getMultiRegionAccessPoint',
            'getMultiRegionAccessPointPolicy',
            'getMultiRegionAccessPointPolicyStatus',
            'getMultiRegionAccessPointRoutes',
            'getPublicAccessBlock',
            'getStorageLensConfiguration',
            'getStorageLensConfigurationTagging',
            'getStorageLensGroup',
            'listAccessGrants',
            'listAccessGrantsInstances',
            'listAccessGrantsLocations',
            'listAccessPoints',
            'listAccessPointsForObjectLambda',
            'listCallerAccessGrants',
            'listJobs',
            'listMultiRegionAccessPoints',
            'listRegionalBuckets',
            'listStorageLensConfigurations',
            'listStorageLensGroups',
            'listTagsForResource',
            'putAccessGrantsInstanceResourcePolicy',
            'putAccessPointConfigurationForObjectLambda',
            'putAccessPointPolicy',
            'putAccessPointPolicyForObjectLambda',
            'putBucketLifecycleConfiguration',
            'putBucketPolicy',
            'putBucketReplication',
            'putBucketTagging',
            'putBucketVersioning',
            'putJobTagging',
            'putMultiRegionAccessPointPolicy',
            'putPublicAccessBlock',
            'putStorageLensConfiguration',
            'putStorageLensConfigurationTagging',
            'submitMultiRegionAccessPointRoutes',
            'tagResource',
            'untagResource',
            'updateAccessGrantsLocation',
            'updateJobPriority',
            'updateJobStatus',
            'updateStorageLensGroup',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateAccessGrantsIdentityCenter' => $this->associateAccessGrantsIdentityCenter(),
            'createAccessGrant' => $this->createAccessGrant(),
            'createAccessGrantsInstance' => $this->createAccessGrantsInstance(),
            'createAccessGrantsLocation' => $this->createAccessGrantsLocation(),
            'createAccessPoint' => $this->createAccessPoint(),
            'createAccessPointForObjectLambda' => $this->createAccessPointForObjectLambda(),
            'createBucket' => $this->createBucket(),
            'createJob' => $this->createJob(),
            'createMultiRegionAccessPoint' => $this->createMultiRegionAccessPoint(),
            'createStorageLensGroup' => $this->createStorageLensGroup(),
            'deleteAccessGrant' => $this->deleteAccessGrant(),
            'deleteAccessGrantsInstance' => $this->deleteAccessGrantsInstance(),
            'deleteAccessGrantsInstanceResourcePolicy' => $this->deleteAccessGrantsInstanceResourcePolicy(),
            'deleteAccessGrantsLocation' => $this->deleteAccessGrantsLocation(),
            'deleteAccessPoint' => $this->deleteAccessPoint(),
            'deleteAccessPointForObjectLambda' => $this->deleteAccessPointForObjectLambda(),
            'deleteAccessPointPolicy' => $this->deleteAccessPointPolicy(),
            'deleteAccessPointPolicyForObjectLambda' => $this->deleteAccessPointPolicyForObjectLambda(),
            'deleteBucket' => $this->deleteBucket(),
            'deleteBucketLifecycleConfiguration' => $this->deleteBucketLifecycleConfiguration(),
            'deleteBucketPolicy' => $this->deleteBucketPolicy(),
            'deleteBucketReplication' => $this->deleteBucketReplication(),
            'deleteBucketTagging' => $this->deleteBucketTagging(),
            'deleteJobTagging' => $this->deleteJobTagging(),
            'deleteMultiRegionAccessPoint' => $this->deleteMultiRegionAccessPoint(),
            'deletePublicAccessBlock' => $this->deletePublicAccessBlock(),
            'deleteStorageLensConfiguration' => $this->deleteStorageLensConfiguration(),
            'deleteStorageLensConfigurationTagging' => $this->deleteStorageLensConfigurationTagging(),
            'deleteStorageLensGroup' => $this->deleteStorageLensGroup(),
            'describeJob' => $this->describeJob(),
            'describeMultiRegionAccessPointOperation' => $this->describeMultiRegionAccessPointOperation(),
            'dissociateAccessGrantsIdentityCenter' => $this->dissociateAccessGrantsIdentityCenter(),
            'getAccessGrant' => $this->getAccessGrant(),
            'getAccessGrantsInstance' => $this->getAccessGrantsInstance(),
            'getAccessGrantsInstanceForPrefix' => $this->getAccessGrantsInstanceForPrefix(),
            'getAccessGrantsInstanceResourcePolicy' => $this->getAccessGrantsInstanceResourcePolicy(),
            'getAccessGrantsLocation' => $this->getAccessGrantsLocation(),
            'getAccessPoint' => $this->getAccessPoint(),
            'getAccessPointConfigurationForObjectLambda' => $this->getAccessPointConfigurationForObjectLambda(),
            'getAccessPointForObjectLambda' => $this->getAccessPointForObjectLambda(),
            'getAccessPointPolicy' => $this->getAccessPointPolicy(),
            'getAccessPointPolicyForObjectLambda' => $this->getAccessPointPolicyForObjectLambda(),
            'getAccessPointPolicyStatus' => $this->getAccessPointPolicyStatus(),
            'getAccessPointPolicyStatusForObjectLambda' => $this->getAccessPointPolicyStatusForObjectLambda(),
            'getBucket' => $this->getBucket(),
            'getBucketLifecycleConfiguration' => $this->getBucketLifecycleConfiguration(),
            'getBucketPolicy' => $this->getBucketPolicy(),
            'getBucketReplication' => $this->getBucketReplication(),
            'getBucketTagging' => $this->getBucketTagging(),
            'getBucketVersioning' => $this->getBucketVersioning(),
            'getDataAccess' => $this->getDataAccess(),
            'getJobTagging' => $this->getJobTagging(),
            'getMultiRegionAccessPoint' => $this->getMultiRegionAccessPoint(),
            'getMultiRegionAccessPointPolicy' => $this->getMultiRegionAccessPointPolicy(),
            'getMultiRegionAccessPointPolicyStatus' => $this->getMultiRegionAccessPointPolicyStatus(),
            'getMultiRegionAccessPointRoutes' => $this->getMultiRegionAccessPointRoutes(),
            'getPublicAccessBlock' => $this->getPublicAccessBlock(),
            'getStorageLensConfiguration' => $this->getStorageLensConfiguration(),
            'getStorageLensConfigurationTagging' => $this->getStorageLensConfigurationTagging(),
            'getStorageLensGroup' => $this->getStorageLensGroup(),
            'listAccessGrants' => $this->listAccessGrants(),
            'listAccessGrantsInstances' => $this->listAccessGrantsInstances(),
            'listAccessGrantsLocations' => $this->listAccessGrantsLocations(),
            'listAccessPoints' => $this->listAccessPoints(),
            'listAccessPointsForObjectLambda' => $this->listAccessPointsForObjectLambda(),
            'listCallerAccessGrants' => $this->listCallerAccessGrants(),
            'listJobs' => $this->listJobs(),
            'listMultiRegionAccessPoints' => $this->listMultiRegionAccessPoints(),
            'listRegionalBuckets' => $this->listRegionalBuckets(),
            'listStorageLensConfigurations' => $this->listStorageLensConfigurations(),
            'listStorageLensGroups' => $this->listStorageLensGroups(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putAccessGrantsInstanceResourcePolicy' => $this->putAccessGrantsInstanceResourcePolicy(),
            'putAccessPointConfigurationForObjectLambda' => $this->putAccessPointConfigurationForObjectLambda(),
            'putAccessPointPolicy' => $this->putAccessPointPolicy(),
            'putAccessPointPolicyForObjectLambda' => $this->putAccessPointPolicyForObjectLambda(),
            'putBucketLifecycleConfiguration' => $this->putBucketLifecycleConfiguration(),
            'putBucketPolicy' => $this->putBucketPolicy(),
            'putBucketReplication' => $this->putBucketReplication(),
            'putBucketTagging' => $this->putBucketTagging(),
            'putBucketVersioning' => $this->putBucketVersioning(),
            'putJobTagging' => $this->putJobTagging(),
            'putMultiRegionAccessPointPolicy' => $this->putMultiRegionAccessPointPolicy(),
            'putPublicAccessBlock' => $this->putPublicAccessBlock(),
            'putStorageLensConfiguration' => $this->putStorageLensConfiguration(),
            'putStorageLensConfigurationTagging' => $this->putStorageLensConfigurationTagging(),
            'submitMultiRegionAccessPointRoutes' => $this->submitMultiRegionAccessPointRoutes(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAccessGrantsLocation' => $this->updateAccessGrantsLocation(),
            'updateJobPriority' => $this->updateJobPriority(),
            'updateJobStatus' => $this->updateJobStatus(),
            'updateStorageLensGroup' => $this->updateStorageLensGroup(),
        };
    }
    private function associateAccessGrantsIdentityCenter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createAccessGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantId'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Grantee'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationId'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('GrantScope'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GranteeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('GranteeIdentifier'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3SubPrefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READ'),
                    new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                    new \PHPStan\Type\Constant\ConstantStringType('READWRITE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAccessGrantsInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsInstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsInstanceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityCenterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityCenterInstanceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityCenterApplicationArn'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAccessGrantsLocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationId'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationScope'),
                new \PHPStan\Type\Constant\ConstantStringType('IAMRoleArn'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAccessPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Alias'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAccessPointForObjectLambda(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ObjectLambdaAccessPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Alias'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createBucket(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMultiRegionAccessPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestTokenARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStorageLensGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAccessGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAccessGrantsInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAccessGrantsInstanceResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAccessGrantsLocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAccessPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAccessPointForObjectLambda(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAccessPointPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAccessPointPolicyForObjectLambda(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucket(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketLifecycleConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketTagging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteJobTagging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteMultiRegionAccessPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestTokenARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deletePublicAccessBlock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteStorageLensConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteStorageLensConfigurationTagging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteStorageLensGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Job'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfirmationRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Manifest'),
                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProgressSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusUpdateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('Report'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TerminationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SuspendedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SuspendedCause'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestGenerator'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeneratedManifestDescriptor'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                        new \PHPStan\Type\Constant\ConstantStringType('Completing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failing'),
                        new \PHPStan\Type\Constant\ConstantStringType('New'),
                        new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pausing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Spec'),
                        new \PHPStan\Type\Constant\ConstantStringType('Location'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Format'),
                            new \PHPStan\Type\Constant\ConstantStringType('Fields'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3BatchOperations_CSV_20180820'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3InventoryReport_CSV_20161130'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Ignore'),
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectVersionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaInvoke'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3PutObjectCopy'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3PutObjectAcl'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3PutObjectTagging'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3DeleteObjectTagging'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3InitiateRestoreObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3PutObjectLegalHold'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3PutObjectRetention'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3ReplicateObject'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvocationSchemaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserArguments'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetResource'),
                            new \PHPStan\Type\Constant\ConstantStringType('CannedAccessControlList'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlGrants'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetadataDirective'),
                            new \PHPStan\Type\Constant\ConstantStringType('ModifiedSinceConstraint'),
                            new \PHPStan\Type\Constant\ConstantStringType('NewObjectMetadata'),
                            new \PHPStan\Type\Constant\ConstantStringType('NewObjectTagging'),
                            new \PHPStan\Type\Constant\ConstantStringType('RedirectLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequesterPays'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnModifiedSinceConstraint'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSEAwsKmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetKeyPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectLockLegalHoldStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectLockMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectLockRetainUntilDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketKeyEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChecksumAlgorithm'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('private'),
                                new \PHPStan\Type\Constant\ConstantStringType('public-read'),
                                new \PHPStan\Type\Constant\ConstantStringType('public-read-write'),
                                new \PHPStan\Type\Constant\ConstantStringType('aws-exec-read'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticated-read'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-read'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-full-control'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Grantee'),
                                new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TypeIdentifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                                        new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FULL_CONTROL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('READ'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('READ_ACP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WRITE_ACP'),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('COPY'),
                                new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CacheControl'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentDisposition'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentEncoding'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentLanguage'),
                                new \PHPStan\Type\Constant\ConstantStringType('UserMetadata'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentLength'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentMD5'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                                new \PHPStan\Type\Constant\ConstantStringType('HttpExpiresDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequesterCharged'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSEAlgorithm'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                                new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                                new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                                new \PHPStan\Type\Constant\ConstantStringType('ON'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLIANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GOVERNANCE'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CRC32'),
                                new \PHPStan\Type\Constant\ConstantStringType('CRC32C'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                                new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                                new \PHPStan\Type\Constant\ConstantStringType('CRC64NVME'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccessControlList'),
                                new \PHPStan\Type\Constant\ConstantStringType('CannedAccessControlList'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Grants'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Grantee'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TypeIdentifier'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                                new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                                                new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('FULL_CONTROL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('READ'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('READ_ACP'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WRITE_ACP'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('private'),
                                    new \PHPStan\Type\Constant\ConstantStringType('public-read'),
                                    new \PHPStan\Type\Constant\ConstantStringType('public-read-write'),
                                    new \PHPStan\Type\Constant\ConstantStringType('aws-exec-read'),
                                    new \PHPStan\Type\Constant\ConstantStringType('authenticated-read'),
                                    new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-read'),
                                    new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-full-control'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TagSet'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ExpirationInDays'),
                            new \PHPStan\Type\Constant\ConstantStringType('GlacierJobTier'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BULK'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LegalHold'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ON'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BypassGovernanceRetention'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retention'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RetainUntilDate'),
                                new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLIANCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GOVERNANCE'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfTasks'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfTasksSucceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfTasksFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timers'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInActiveSeconds'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Format'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReportScope'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('Report_CSV_20180820'),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AllTasks'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedTasksOnly'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3JobManifestGenerator'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ExpectedBucketOwner'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceBucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('ManifestOutputLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnableManifestOutput'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ExpectedManifestBucketOwner'),
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('ManifestPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('ManifestEncryption'),
                                new \PHPStan\Type\Constant\ConstantStringType('ManifestFormat'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SSES3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SSEKMS'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('S3InventoryReport_CSV_20211130'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EligibleForReplication'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedAfter'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreatedBefore'),
                                new \PHPStan\Type\Constant\ConstantStringType('ObjectReplicationStatuses'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyNameConstraint'),
                                new \PHPStan\Type\Constant\ConstantStringType('ObjectSizeGreaterThanBytes'),
                                new \PHPStan\Type\Constant\ConstantStringType('ObjectSizeLessThanBytes'),
                                new \PHPStan\Type\Constant\ConstantStringType('MatchAnyStorageClass'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MatchAnyPrefix'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MatchAnySuffix'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MatchAnySubstring'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Format'),
                        new \PHPStan\Type\Constant\ConstantStringType('Location'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('S3InventoryReport_CSV_20211130'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectVersionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeMultiRegionAccessPointOperation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AsyncOperation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestTokenARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResponseDetails'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreateMultiRegionAccessPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteMultiRegionAccessPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('PutMultiRegionAccessPointPolicy'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreateMultiRegionAccessPointRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteMultiRegionAccessPointRequest'),
                        new \PHPStan\Type\Constant\ConstantStringType('PutMultiRegionAccessPointPolicyRequest'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccessBlock'),
                            new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAcls'),
                                new \PHPStan\Type\Constant\ConstantStringType('IgnorePublicAcls'),
                                new \PHPStan\Type\Constant\ConstantStringType('BlockPublicPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('RestrictPublicBuckets'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketAccountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MultiRegionAccessPointDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestStatus'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function dissociateAccessGrantsIdentityCenter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getAccessGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantId'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Grantee'),
                new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationId'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('GrantScope'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GranteeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('GranteeIdentifier'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READ'),
                    new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                    new \PHPStan\Type\Constant\ConstantStringType('READWRITE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3SubPrefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAccessGrantsInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsInstanceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsInstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityCenterArn'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityCenterInstanceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityCenterApplicationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getAccessGrantsInstanceForPrefix(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsInstanceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsInstanceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAccessGrantsInstanceResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getAccessGrantsLocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationId'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationScope'),
                new \PHPStan\Type\Constant\ConstantStringType('IAMRoleArn'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAccessPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                new \PHPStan\Type\Constant\ConstantStringType('NetworkOrigin'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('PublicAccessBlockConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessPointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketAccountId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Internet'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAcls'),
                    new \PHPStan\Type\Constant\ConstantStringType('IgnorePublicAcls'),
                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestrictPublicBuckets'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAccessPointConfigurationForObjectLambda(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SupportingAccessPoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchMetricsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedFeatures'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransformationConfigurations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GetObject-Range'),
                        new \PHPStan\Type\Constant\ConstantStringType('GetObject-PartNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('HeadObject-Range'),
                        new \PHPStan\Type\Constant\ConstantStringType('HeadObject-PartNumber'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentTransformation'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GetObject'),
                            new \PHPStan\Type\Constant\ConstantStringType('HeadObject'),
                            new \PHPStan\Type\Constant\ConstantStringType('ListObjects'),
                            new \PHPStan\Type\Constant\ConstantStringType('ListObjectsV2'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwsLambda'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionPayload'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAccessPointForObjectLambda(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('PublicAccessBlockConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Alias'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAcls'),
                    new \PHPStan\Type\Constant\ConstantStringType('IgnorePublicAcls'),
                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestrictPublicBuckets'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAccessPointPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAccessPointPolicyForObjectLambda(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAccessPointPolicyStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IsPublic'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getAccessPointPolicyStatusForObjectLambda(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IsPublic'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getBucket(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                new \PHPStan\Type\Constant\ConstantStringType('PublicAccessBlockEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getBucketLifecycleConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ID'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Transitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('NoncurrentVersionTransitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('NoncurrentVersionExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AbortIncompleteMultipartUpload'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Date'),
                        new \PHPStan\Type\Constant\ConstantStringType('Days'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpiredObjectDeleteMarker'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                        new \PHPStan\Type\Constant\ConstantStringType('And'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectSizeGreaterThan'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectSizeLessThan'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectSizeGreaterThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectSizeLessThan'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Date'),
                        new \PHPStan\Type\Constant\ConstantStringType('Days'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NoncurrentDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NoncurrentDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewerNoncurrentVersions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DaysAfterInitiation'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getBucketPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBucketReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceSelectionCriteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExistingObjectReplication'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteMarkerReplication'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                            new \PHPStan\Type\Constant\ConstantStringType('And'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SseKmsEncryptedObjects'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaModifications'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Account'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicationTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlTranslation'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('Time'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReplicaKmsKeyID'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventThreshold'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                new \PHPStan\Type\Constant\ConstantStringType('REDUCED_REDUNDANCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                                new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                                new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('OUTPOSTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getBucketTagging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TagSet'),
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
    private function getBucketVersioning(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('MFADelete'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                ]),
            ]),
        ]);
    }
    private function getDataAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('MatchedGrantTarget'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretAccessKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
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
    private function getJobTagging(): ?\PHPStan\Type\Type
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
    private function getMultiRegionAccessPoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessPoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublicAccessBlock'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAcls'),
                        new \PHPStan\Type\Constant\ConstantStringType('IgnorePublicAcls'),
                        new \PHPStan\Type\Constant\ConstantStringType('BlockPublicPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestrictPublicBuckets'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCONSISTENT_ACROSS_REGIONS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('BucketAccountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getMultiRegionAccessPointPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Established'),
                    new \PHPStan\Type\Constant\ConstantStringType('Proposed'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getMultiRegionAccessPointPolicyStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Established'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IsPublic'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getMultiRegionAccessPointRoutes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Mrap'),
                new \PHPStan\Type\Constant\ConstantStringType('Routes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficDialPercentage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getPublicAccessBlock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PublicAccessBlockConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAcls'),
                    new \PHPStan\Type\Constant\ConstantStringType('IgnorePublicAcls'),
                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestrictPublicBuckets'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getStorageLensConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StorageLensConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Include'),
                    new \PHPStan\Type\Constant\ConstantStringType('Exclude'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataExport'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsOrg'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageLensArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActivityMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('BucketLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdvancedCostOptimizationMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdvancedDataProtectionMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetailedStatusCodesMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageLensGroupLevel'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IsEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActivityMetrics'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrefixLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdvancedCostOptimizationMetrics'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdvancedDataProtectionMetrics'),
                            new \PHPStan\Type\Constant\ConstantStringType('DetailedStatusCodesMetrics'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IsEnabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StorageMetrics'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IsEnabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SelectionCriteria'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxDepth'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MinStorageBytesPercentage'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IsEnabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IsEnabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IsEnabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IsEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IsEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IsEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SelectionCriteria'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Include'),
                                new \PHPStan\Type\Constant\ConstantStringType('Exclude'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Buckets'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Buckets'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchMetrics'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Format'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputSchemaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                new \PHPStan\Type\Constant\ConstantStringType('Parquet'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantStringType('V_1'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSES3'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSEKMS'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IsEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getStorageLensConfigurationTagging(): ?\PHPStan\Type\Type
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
    private function getStorageLensGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StorageLensGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageLensGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MatchAnyPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('MatchAnySuffix'),
                        new \PHPStan\Type\Constant\ConstantStringType('MatchAnyTag'),
                        new \PHPStan\Type\Constant\ConstantStringType('MatchObjectAge'),
                        new \PHPStan\Type\Constant\ConstantStringType('MatchObjectSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('And'),
                        new \PHPStan\Type\Constant\ConstantStringType('Or'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DaysGreaterThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('DaysLessThan'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BytesGreaterThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('BytesLessThan'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MatchAnyPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('MatchAnySuffix'),
                            new \PHPStan\Type\Constant\ConstantStringType('MatchAnyTag'),
                            new \PHPStan\Type\Constant\ConstantStringType('MatchObjectAge'),
                            new \PHPStan\Type\Constant\ConstantStringType('MatchObjectSize'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DaysGreaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('DaysLessThan'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BytesGreaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('BytesLessThan'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MatchAnyPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('MatchAnySuffix'),
                            new \PHPStan\Type\Constant\ConstantStringType('MatchAnyTag'),
                            new \PHPStan\Type\Constant\ConstantStringType('MatchObjectAge'),
                            new \PHPStan\Type\Constant\ConstantStringType('MatchObjectSize'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DaysGreaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('DaysLessThan'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BytesGreaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('BytesLessThan'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listAccessGrants(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessGrantId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessGrantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Grantee'),
                    new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GranteeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('GranteeIdentifier'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READ'),
                        new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('READWRITE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3SubPrefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listAccessGrantsInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsInstancesList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityCenterArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityCenterInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityCenterApplicationArn'),
                ], [
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
    private function listAccessGrantsLocations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationsList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocationScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('IAMRoleArn'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listAccessPoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessPointList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkOrigin'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('BucketAccountId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Internet'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAccessPointsForObjectLambda(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ObjectLambdaAccessPointList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectLambdaAccessPointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCallerAccessGrants(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('CallerAccessGrantsList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READ'),
                        new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('READWRITE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Jobs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TerminationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProgressSummary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaInvoke'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3PutObjectCopy'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3PutObjectAcl'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3PutObjectTagging'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3DeleteObjectTagging'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3InitiateRestoreObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3PutObjectLegalHold'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3PutObjectRetention'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3ReplicateObject'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                        new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                        new \PHPStan\Type\Constant\ConstantStringType('Completing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failing'),
                        new \PHPStan\Type\Constant\ConstantStringType('New'),
                        new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pausing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                        new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfTasks'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfTasksSucceeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfTasksFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timers'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ElapsedTimeInActiveSeconds'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listMultiRegionAccessPoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessPoints'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublicAccessBlock'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAcls'),
                        new \PHPStan\Type\Constant\ConstantStringType('IgnorePublicAcls'),
                        new \PHPStan\Type\Constant\ConstantStringType('BlockPublicPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestrictPublicBuckets'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCONSISTENT_ACROSS_REGIONS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('BucketAccountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRegionalBuckets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegionalBucketList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('BucketArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublicAccessBlockEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStorageLensConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('StorageLensConfigurationList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageLensArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function listStorageLensGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('StorageLensGroupList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageLensGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
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
    private function putAccessGrantsInstanceResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                new \PHPStan\Type\Constant\ConstantStringType('Organization'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function putAccessPointConfigurationForObjectLambda(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putAccessPointPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putAccessPointPolicyForObjectLambda(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketLifecycleConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketTagging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketVersioning(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putJobTagging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function putMultiRegionAccessPointPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestTokenARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putPublicAccessBlock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putStorageLensConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putStorageLensConfigurationTagging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function submitMultiRegionAccessPointRoutes(): ?\PHPStan\Type\Type
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
    private function updateAccessGrantsLocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationId'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessGrantsLocationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LocationScope'),
                new \PHPStan\Type\Constant\ConstantStringType('IAMRoleArn'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateJobPriority(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Priority'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function updateJobStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusUpdateReason'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cancelling'),
                    new \PHPStan\Type\Constant\ConstantStringType('Complete'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completing'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failing'),
                    new \PHPStan\Type\Constant\ConstantStringType('New'),
                    new \PHPStan\Type\Constant\ConstantStringType('Paused'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pausing'),
                    new \PHPStan\Type\Constant\ConstantStringType('Preparing'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ready'),
                    new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateStorageLensGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}