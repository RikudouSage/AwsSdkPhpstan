<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class WorkSpacesThinClientClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\WorkSpacesThinClient\WorkSpacesThinClientClient>
     */
    public function getClass(): string
    {
        return \Aws\WorkSpacesThinClient\WorkSpacesThinClientClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createEnvironment',
            'deleteDevice',
            'deleteEnvironment',
            'deregisterDevice',
            'getDevice',
            'getEnvironment',
            'getSoftwareSet',
            'listDevices',
            'listEnvironments',
            'listSoftwareSets',
            'listTagsForResource',
            'tagResource',
            'untagResource',
            'updateDevice',
            'updateEnvironment',
            'updateSoftwareSet',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createEnvironment' => $this->createEnvironment(),
            'deleteDevice' => $this->deleteDevice(),
            'deleteEnvironment' => $this->deleteEnvironment(),
            'deregisterDevice' => $this->deregisterDevice(),
            'getDevice' => $this->getDevice(),
            'getEnvironment' => $this->getEnvironment(),
            'getSoftwareSet' => $this->getSoftwareSet(),
            'listDevices' => $this->listDevices(),
            'listEnvironments' => $this->listEnvironments(),
            'listSoftwareSets' => $this->listSoftwareSets(),
            'listTagsForResource' => $this->listTagsForResource(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDevice' => $this->updateDevice(),
            'updateEnvironment' => $this->updateEnvironment(),
            'updateSoftwareSet' => $this->updateSoftwareSet(),
        };
    }
    private function createEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('desktopArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('desktopEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('desktopType'),
                    new \PHPStan\Type\Constant\ConstantStringType('activationCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('softwareSetUpdateSchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('maintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('softwareSetUpdateMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('appstream'),
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces-web'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USE_MAINTENANCE_WINDOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_IMMEDIATELY'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimeHour'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimeMinute'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTimeHour'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTimeMinute'),
                        new \PHPStan\Type\Constant\ConstantStringType('daysOfTheWeek'),
                        new \PHPStan\Type\Constant\ConstantStringType('applyTimeOf'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UTC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USE_LATEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('USE_DESIRED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('device'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('serialNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('model'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentSoftwareSetVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingSoftwareSetVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('softwareSetUpdateSchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('softwareSetComplianceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('softwareSetUpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastConnectedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastPostureAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USE_MAINTENANCE_WINDOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_IMMEDIATELY'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLIANT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_COMPLIANT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UP_TO_DATE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('desktopArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('desktopEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('desktopType'),
                    new \PHPStan\Type\Constant\ConstantStringType('activationCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredDevicesCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('softwareSetUpdateSchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('maintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('softwareSetUpdateMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingSoftwareSetVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('softwareSetComplianceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceCreationTags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('appstream'),
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces-web'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USE_MAINTENANCE_WINDOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_IMMEDIATELY'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimeHour'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimeMinute'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTimeHour'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTimeMinute'),
                        new \PHPStan\Type\Constant\ConstantStringType('daysOfTheWeek'),
                        new \PHPStan\Type\Constant\ConstantStringType('applyTimeOf'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UTC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USE_LATEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('USE_DESIRED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NO_REGISTERED_DEVICES'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLIANT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_COMPLIANT'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getSoftwareSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('softwareSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('releasedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedUntil'),
                    new \PHPStan\Type\Constant\ConstantStringType('validationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('software'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_VALIDATED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function listDevices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('devices'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('serialNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('model'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('softwareSetUpdateSchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastConnectedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastPostureAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USE_MAINTENANCE_WINDOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_IMMEDIATELY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environments'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('desktopArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('desktopEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('desktopType'),
                    new \PHPStan\Type\Constant\ConstantStringType('activationCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('softwareSetUpdateSchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('maintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('softwareSetUpdateMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('appstream'),
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces-web'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USE_MAINTENANCE_WINDOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_IMMEDIATELY'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimeHour'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimeMinute'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTimeHour'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTimeMinute'),
                        new \PHPStan\Type\Constant\ConstantStringType('daysOfTheWeek'),
                        new \PHPStan\Type\Constant\ConstantStringType('applyTimeOf'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UTC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USE_LATEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('USE_DESIRED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSoftwareSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('softwareSets'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('releasedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedUntil'),
                    new \PHPStan\Type\Constant\ConstantStringType('validationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_VALIDATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
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
    private function updateDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('device'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('serialNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('model'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('softwareSetUpdateSchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastConnectedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastPostureAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARCHIVED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USE_MAINTENANCE_WINDOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_IMMEDIATELY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('desktopArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('desktopEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('desktopType'),
                    new \PHPStan\Type\Constant\ConstantStringType('activationCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('softwareSetUpdateSchedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('maintenanceWindow'),
                    new \PHPStan\Type\Constant\ConstantStringType('softwareSetUpdateMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('desiredSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('pendingSoftwareSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces'),
                        new \PHPStan\Type\Constant\ConstantStringType('appstream'),
                        new \PHPStan\Type\Constant\ConstantStringType('workspaces-web'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USE_MAINTENANCE_WINDOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLY_IMMEDIATELY'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimeHour'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTimeMinute'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTimeHour'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTimeMinute'),
                        new \PHPStan\Type\Constant\ConstantStringType('daysOfTheWeek'),
                        new \PHPStan\Type\Constant\ConstantStringType('applyTimeOf'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MONDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEDNESDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('THURSDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRIDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SATURDAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUNDAY'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UTC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USE_LATEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('USE_DESIRED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateSoftwareSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}