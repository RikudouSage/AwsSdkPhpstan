<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class DirectoryServiceDataClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\DirectoryServiceData\DirectoryServiceDataClient>
     */
    public function getClass(): string
    {
        return \Aws\DirectoryServiceData\DirectoryServiceDataClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addGroupMember',
            'createGroup',
            'createUser',
            'deleteGroup',
            'deleteUser',
            'describeGroup',
            'describeUser',
            'disableUser',
            'listGroupMembers',
            'listGroups',
            'listGroupsForMember',
            'listUsers',
            'removeGroupMember',
            'searchGroups',
            'searchUsers',
            'updateGroup',
            'updateUser',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addGroupMember' => $this->addGroupMember(),
            'createGroup' => $this->createGroup(),
            'createUser' => $this->createUser(),
            'deleteGroup' => $this->deleteGroup(),
            'deleteUser' => $this->deleteUser(),
            'describeGroup' => $this->describeGroup(),
            'describeUser' => $this->describeUser(),
            'disableUser' => $this->disableUser(),
            'listGroupMembers' => $this->listGroupMembers(),
            'listGroups' => $this->listGroups(),
            'listGroupsForMember' => $this->listGroupsForMember(),
            'listUsers' => $this->listUsers(),
            'removeGroupMember' => $this->removeGroupMember(),
            'searchGroups' => $this->searchGroups(),
            'searchUsers' => $this->searchUsers(),
            'updateGroup' => $this->updateGroup(),
            'updateUser' => $this->updateUser(),
        };
    }
    private function addGroupMember(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('SAMAccountName'),
                new \PHPStan\Type\Constant\ConstantStringType('SID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('SAMAccountName'),
                new \PHPStan\Type\Constant\ConstantStringType('SID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteGroup(): ?\PHPStan\Type\Type
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
    private function describeGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('DistinguishedName'),
                new \PHPStan\Type\Constant\ConstantStringType('GroupScope'),
                new \PHPStan\Type\Constant\ConstantStringType('GroupType'),
                new \PHPStan\Type\Constant\ConstantStringType('OtherAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('Realm'),
                new \PHPStan\Type\Constant\ConstantStringType('SAMAccountName'),
                new \PHPStan\Type\Constant\ConstantStringType('SID'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainLocal'),
                    new \PHPStan\Type\Constant\ConstantStringType('Global'),
                    new \PHPStan\Type\Constant\ConstantStringType('Universal'),
                    new \PHPStan\Type\Constant\ConstantStringType('BuiltinLocal'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Distribution'),
                    new \PHPStan\Type\Constant\ConstantStringType('Security'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                    new \PHPStan\Type\Constant\ConstantStringType('N'),
                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                    new \PHPStan\Type\Constant\ConstantStringType('SS'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('DistinguishedName'),
                new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                new \PHPStan\Type\Constant\ConstantStringType('OtherAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('Realm'),
                new \PHPStan\Type\Constant\ConstantStringType('SAMAccountName'),
                new \PHPStan\Type\Constant\ConstantStringType('SID'),
                new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                new \PHPStan\Type\Constant\ConstantStringType('UserPrincipalName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                    new \PHPStan\Type\Constant\ConstantStringType('N'),
                    new \PHPStan\Type\Constant\ConstantStringType('S'),
                    new \PHPStan\Type\Constant\ConstantStringType('SS'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
    private function listGroupMembers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('MemberRealm'),
                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Realm'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MemberType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAMAccountName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SID'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPUTER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Realm'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GroupScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAMAccountName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SID'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DomainLocal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Global'),
                        new \PHPStan\Type\Constant\ConstantStringType('Universal'),
                        new \PHPStan\Type\Constant\ConstantStringType('BuiltinLocal'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Distribution'),
                        new \PHPStan\Type\Constant\ConstantStringType('Security'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGroupsForMember(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                new \PHPStan\Type\Constant\ConstantStringType('MemberRealm'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Realm'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GroupScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAMAccountName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SID'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DomainLocal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Global'),
                        new \PHPStan\Type\Constant\ConstantStringType('Universal'),
                        new \PHPStan\Type\Constant\ConstantStringType('BuiltinLocal'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Distribution'),
                        new \PHPStan\Type\Constant\ConstantStringType('Security'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Realm'),
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAMAccountName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SID'),
                    new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function removeGroupMember(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function searchGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Realm'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DistinguishedName'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('GroupType'),
                    new \PHPStan\Type\Constant\ConstantStringType('OtherAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAMAccountName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DomainLocal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Global'),
                        new \PHPStan\Type\Constant\ConstantStringType('Universal'),
                        new \PHPStan\Type\Constant\ConstantStringType('BuiltinLocal'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Distribution'),
                        new \PHPStan\Type\Constant\ConstantStringType('Security'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                        new \PHPStan\Type\Constant\ConstantStringType('N'),
                        new \PHPStan\Type\Constant\ConstantStringType('S'),
                        new \PHPStan\Type\Constant\ConstantStringType('SS'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Realm'),
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DistinguishedName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                    new \PHPStan\Type\Constant\ConstantStringType('OtherAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAMAccountName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SID'),
                    new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPrincipalName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                        new \PHPStan\Type\Constant\ConstantStringType('N'),
                        new \PHPStan\Type\Constant\ConstantStringType('S'),
                        new \PHPStan\Type\Constant\ConstantStringType('SS'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function updateGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}