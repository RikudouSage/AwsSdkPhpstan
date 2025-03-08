<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class RecycleBinClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\RecycleBin\RecycleBinClient>
     */
    public function getClass(): string
    {
        return \Aws\RecycleBin\RecycleBinClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createRule',
            'deleteRule',
            'getRule',
            'listRules',
            'listTagsForResource',
            'lockRule',
            'tagResource',
            'unlockRule',
            'untagResource',
            'updateRule',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createRule' => $this->createRule(),
            'deleteRule' => $this->deleteRule(),
            'getRule' => $this->getRule(),
            'listRules' => $this->listRules(),
            'listTagsForResource' => $this->listTagsForResource(),
            'lockRule' => $this->lockRule(),
            'tagResource' => $this->tagResource(),
            'unlockRule' => $this->unlockRule(),
            'untagResource' => $this->untagResource(),
            'updateRule' => $this->updateRule(),
        };
    }
    private function createRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('LockConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('LockState'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExcludeResourceTags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodUnit'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EBS_SNAPSHOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2_IMAGE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UnlockDelay'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UnlockDelayValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnlockDelayUnit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('locked'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending_unlock'),
                    new \PHPStan\Type\Constant\ConstantStringType('unlocked'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('LockConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('LockState'),
                new \PHPStan\Type\Constant\ConstantStringType('LockEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExcludeResourceTags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EBS_SNAPSHOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2_IMAGE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodUnit'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UnlockDelay'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UnlockDelayValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnlockDelayUnit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('locked'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending_unlock'),
                    new \PHPStan\Type\Constant\ConstantStringType('unlocked'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('LockState'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodUnit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('locked'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending_unlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('unlocked'),
                    ]),
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
    private function lockRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('LockConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('LockState'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExcludeResourceTags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EBS_SNAPSHOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2_IMAGE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodUnit'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UnlockDelay'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UnlockDelayValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnlockDelayUnit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('locked'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending_unlock'),
                    new \PHPStan\Type\Constant\ConstantStringType('unlocked'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function unlockRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('LockConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('LockState'),
                new \PHPStan\Type\Constant\ConstantStringType('LockEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExcludeResourceTags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EBS_SNAPSHOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2_IMAGE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodUnit'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UnlockDelay'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UnlockDelayValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnlockDelayUnit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('locked'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending_unlock'),
                    new \PHPStan\Type\Constant\ConstantStringType('unlocked'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriod'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTags'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('LockState'),
                new \PHPStan\Type\Constant\ConstantStringType('LockEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExcludeResourceTags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodUnit'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('EBS_SNAPSHOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('EC2_IMAGE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('locked'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending_unlock'),
                    new \PHPStan\Type\Constant\ConstantStringType('unlocked'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceTagValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}