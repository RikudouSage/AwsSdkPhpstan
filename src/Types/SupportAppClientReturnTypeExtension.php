<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SupportAppClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SupportApp\SupportAppClient>
     */
    public function getClass(): string
    {
        return \Aws\SupportApp\SupportAppClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createSlackChannelConfiguration',
            'deleteAccountAlias',
            'deleteSlackChannelConfiguration',
            'deleteSlackWorkspaceConfiguration',
            'getAccountAlias',
            'listSlackChannelConfigurations',
            'listSlackWorkspaceConfigurations',
            'putAccountAlias',
            'registerSlackWorkspaceForOrganization',
            'updateSlackChannelConfiguration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createSlackChannelConfiguration' => $this->createSlackChannelConfiguration(),
            'deleteAccountAlias' => $this->deleteAccountAlias(),
            'deleteSlackChannelConfiguration' => $this->deleteSlackChannelConfiguration(),
            'deleteSlackWorkspaceConfiguration' => $this->deleteSlackWorkspaceConfiguration(),
            'getAccountAlias' => $this->getAccountAlias(),
            'listSlackChannelConfigurations' => $this->listSlackChannelConfigurations(),
            'listSlackWorkspaceConfigurations' => $this->listSlackWorkspaceConfigurations(),
            'putAccountAlias' => $this->putAccountAlias(),
            'registerSlackWorkspaceForOrganization' => $this->registerSlackWorkspaceForOrganization(),
            'updateSlackChannelConfiguration' => $this->updateSlackChannelConfiguration(),
        };
    }
    private function createSlackChannelConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAccountAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSlackChannelConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSlackWorkspaceConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAccountAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountAlias'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSlackChannelConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('slackChannelConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('channelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('notifyOnAddCorrespondenceToCase'),
                    new \PHPStan\Type\Constant\ConstantStringType('notifyOnCaseSeverity'),
                    new \PHPStan\Type\Constant\ConstantStringType('notifyOnCreateOrReopenCase'),
                    new \PHPStan\Type\Constant\ConstantStringType('notifyOnResolveCase'),
                    new \PHPStan\Type\Constant\ConstantStringType('teamId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                        new \PHPStan\Type\Constant\ConstantStringType('all'),
                        new \PHPStan\Type\Constant\ConstantStringType('high'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listSlackWorkspaceConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('slackWorkspaceConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('allowOrganizationMemberAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('teamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('teamName'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function putAccountAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function registerSlackWorkspaceForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountType'),
                new \PHPStan\Type\Constant\ConstantStringType('teamId'),
                new \PHPStan\Type\Constant\ConstantStringType('teamName'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('management'),
                    new \PHPStan\Type\Constant\ConstantStringType('member'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSlackChannelConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('channelId'),
                new \PHPStan\Type\Constant\ConstantStringType('channelName'),
                new \PHPStan\Type\Constant\ConstantStringType('channelRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('notifyOnAddCorrespondenceToCase'),
                new \PHPStan\Type\Constant\ConstantStringType('notifyOnCaseSeverity'),
                new \PHPStan\Type\Constant\ConstantStringType('notifyOnCreateOrReopenCase'),
                new \PHPStan\Type\Constant\ConstantStringType('notifyOnResolveCase'),
                new \PHPStan\Type\Constant\ConstantStringType('teamId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                    new \PHPStan\Type\Constant\ConstantStringType('all'),
                    new \PHPStan\Type\Constant\ConstantStringType('high'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}