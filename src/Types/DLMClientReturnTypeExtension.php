<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class DLMClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\DLM\DLMClient>
     */
    public function getClass(): string
    {
        return \Aws\DLM\DLMClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createLifecyclePolicy',
            'deleteLifecyclePolicy',
            'getLifecyclePolicies',
            'getLifecyclePolicy',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateLifecyclePolicy',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createLifecyclePolicy' => $this->createLifecyclePolicy(),
            'deleteLifecyclePolicy' => $this->deleteLifecyclePolicy(),
            'getLifecyclePolicies' => $this->getLifecyclePolicies(),
            'getLifecyclePolicy' => $this->getLifecyclePolicy(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateLifecyclePolicy' => $this->updateLifecyclePolicy(),
        };
    }
    private function createLifecyclePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteLifecyclePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getLifecyclePolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policies'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultPolicy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EBS_SNAPSHOT_MANAGEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMAGE_MANAGEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVENT_BASED_POLICY'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getLifecyclePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DateModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultPolicy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('Schedules'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyLanguage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateInterval'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetainInterval'),
                        new \PHPStan\Type\Constant\ConstantStringType('CopyTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('CrossRegionCopyTargets'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExtendDeletion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Exclusions'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EBS_SNAPSHOT_MANAGEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMAGE_MANAGEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('EVENT_BASED_POLICY'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VOLUME'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                            new \PHPStan\Type\Constant\ConstantStringType('OUTPOST'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCAL_ZONE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('CopyTags'),
                            new \PHPStan\Type\Constant\ConstantStringType('TagsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('VariableTags'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreateRule'),
                            new \PHPStan\Type\Constant\ConstantStringType('RetainRule'),
                            new \PHPStan\Type\Constant\ConstantStringType('FastRestoreRule'),
                            new \PHPStan\Type\Constant\ConstantStringType('CrossRegionCopyRules'),
                            new \PHPStan\Type\Constant\ConstantStringType('ShareRules'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeprecateRule'),
                            new \PHPStan\Type\Constant\ConstantStringType('ArchiveRule'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                                new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                                new \PHPStan\Type\Constant\ConstantStringType('IntervalUnit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Times'),
                                new \PHPStan\Type\Constant\ConstantStringType('CronExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Scripts'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OUTPOST_LOCAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOCAL_ZONE'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Stages'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionHandlerService'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionHandler'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ExecuteOperationOnScriptFailure'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaximumRetryCount'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('PRE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantStringType('AWS_SYSTEMS_MANAGER'),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                                new \PHPStan\Type\Constant\ConstantStringType('IntervalUnit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                                new \PHPStan\Type\Constant\ConstantStringType('IntervalUnit'),
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TargetRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                                new \PHPStan\Type\Constant\ConstantStringType('CmkArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CopyTags'),
                                new \PHPStan\Type\Constant\ConstantStringType('RetainRule'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeprecateRule'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IntervalUnit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IntervalUnit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TargetAccounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('UnshareInterval'),
                                new \PHPStan\Type\Constant\ConstantStringType('UnshareIntervalUnit'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                                new \PHPStan\Type\Constant\ConstantStringType('IntervalUnit'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RetainRule'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RetentionArchiveTier'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IntervalUnit'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ExcludeBootVolume'),
                            new \PHPStan\Type\Constant\ConstantStringType('NoReboot'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExcludeDataVolumeTags'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('MANAGED_CWE'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnapshotOwner'),
                                new \PHPStan\Type\Constant\ConstantStringType('DescriptionRegex'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('shareSnapshot'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('CrossRegionCopy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Target'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('RetainRule'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CmkArn'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IntervalUnit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SIMPLIFIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VOLUME'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetRegion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ExcludeBootVolumes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExcludeVolumeTypes'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExcludeTags'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
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
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLifecyclePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}