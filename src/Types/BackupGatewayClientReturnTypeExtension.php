<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class BackupGatewayClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\BackupGateway\BackupGatewayClient>
     */
    public function getClass(): string
    {
        return \Aws\BackupGateway\BackupGatewayClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateGatewayToServer',
            'createGateway',
            'deleteGateway',
            'deleteHypervisor',
            'disassociateGatewayFromServer',
            'getBandwidthRateLimitSchedule',
            'getGateway',
            'getHypervisor',
            'getHypervisorPropertyMappings',
            'getVirtualMachine',
            'importHypervisorConfiguration',
            'listGateways',
            'listHypervisors',
            'listTagsForResource',
            'listVirtualMachines',
            'putBandwidthRateLimitSchedule',
            'putHypervisorPropertyMappings',
            'putMaintenanceStartTime',
            'startVirtualMachinesMetadataSync',
            'tagResource',
            'testHypervisorConfiguration',
            'untagResource',
            'updateGatewayInformation',
            'updateGatewaySoftwareNow',
            'updateHypervisor',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateGatewayToServer' => $this->associateGatewayToServer(),
            'createGateway' => $this->createGateway(),
            'deleteGateway' => $this->deleteGateway(),
            'deleteHypervisor' => $this->deleteHypervisor(),
            'disassociateGatewayFromServer' => $this->disassociateGatewayFromServer(),
            'getBandwidthRateLimitSchedule' => $this->getBandwidthRateLimitSchedule(),
            'getGateway' => $this->getGateway(),
            'getHypervisor' => $this->getHypervisor(),
            'getHypervisorPropertyMappings' => $this->getHypervisorPropertyMappings(),
            'getVirtualMachine' => $this->getVirtualMachine(),
            'importHypervisorConfiguration' => $this->importHypervisorConfiguration(),
            'listGateways' => $this->listGateways(),
            'listHypervisors' => $this->listHypervisors(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listVirtualMachines' => $this->listVirtualMachines(),
            'putBandwidthRateLimitSchedule' => $this->putBandwidthRateLimitSchedule(),
            'putHypervisorPropertyMappings' => $this->putHypervisorPropertyMappings(),
            'putMaintenanceStartTime' => $this->putMaintenanceStartTime(),
            'startVirtualMachinesMetadataSync' => $this->startVirtualMachinesMetadataSync(),
            'tagResource' => $this->tagResource(),
            'testHypervisorConfiguration' => $this->testHypervisorConfiguration(),
            'untagResource' => $this->untagResource(),
            'updateGatewayInformation' => $this->updateGatewayInformation(),
            'updateGatewaySoftwareNow' => $this->updateGatewaySoftwareNow(),
            'updateHypervisor' => $this->updateHypervisor(),
        };
    }
    private function associateGatewayToServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteHypervisor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HypervisorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateGatewayFromServer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBandwidthRateLimitSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BandwidthRateLimitIntervals'),
                new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AverageUploadRateLimitInBitsPerSec'),
                    new \PHPStan\Type\Constant\ConstantStringType('DaysOfWeek'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndHourOfDay'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndMinuteOfHour'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartHourOfDay'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartMinuteOfHour'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Gateway'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HypervisorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSeenTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaintenanceStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextUpdateAvailabilityTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoint'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('BACKUP_VM'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DayOfMonth'),
                        new \PHPStan\Type\Constant\ConstantStringType('DayOfWeek'),
                        new \PHPStan\Type\Constant\ConstantStringType('HourOfDay'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinuteOfHour'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getHypervisor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Hypervisor'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Host'),
                    new \PHPStan\Type\Constant\ConstantStringType('HypervisorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulMetadataSyncTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestMetadataSyncStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestMetadataSyncStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIALLY_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONLINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFFLINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getHypervisorPropertyMappings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HypervisorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('VmwareToAwsTagMappings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AwsTagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsTagValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('VmwareCategory'),
                    new \PHPStan\Type\Constant\ConstantStringType('VmwareTagName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getVirtualMachine(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VirtualMachine'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HostName'),
                    new \PHPStan\Type\Constant\ConstantStringType('HypervisorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastBackupDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VmwareTags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VmwareCategory'),
                        new \PHPStan\Type\Constant\ConstantStringType('VmwareTagDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('VmwareTagName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function importHypervisorConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HypervisorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGateways(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Gateways'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayDisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HypervisorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSeenTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('BACKUP_VM'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHypervisors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Hypervisors'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Host'),
                    new \PHPStan\Type\Constant\ConstantStringType('HypervisorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONLINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFFLINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
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
        ]);
    }
    private function listVirtualMachines(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('VirtualMachines'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HostName'),
                    new \PHPStan\Type\Constant\ConstantStringType('HypervisorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastBackupDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
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
    private function putBandwidthRateLimitSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putHypervisorPropertyMappings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HypervisorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putMaintenanceStartTime(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startVirtualMachinesMetadataSync(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HypervisorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function testHypervisorConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateGatewayInformation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateGatewaySoftwareNow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateHypervisor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HypervisorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}