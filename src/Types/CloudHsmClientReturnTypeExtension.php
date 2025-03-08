<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CloudHsmClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CloudHsm\CloudHsmClient>
     */
    public function getClass(): string
    {
        return \Aws\CloudHsm\CloudHsmClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addTagsToResource',
            'createHapg',
            'createHsm',
            'createLunaClient',
            'deleteHapg',
            'deleteHsm',
            'deleteLunaClient',
            'describeHapg',
            'describeHsm',
            'describeLunaClient',
            'getConfig',
            'listAvailableZones',
            'listHapgs',
            'listHsms',
            'listLunaClients',
            'listTagsForResource',
            'modifyHapg',
            'modifyHsm',
            'modifyLunaClient',
            'removeTagsFromResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addTagsToResource' => $this->addTagsToResource(),
            'createHapg' => $this->createHapg(),
            'createHsm' => $this->createHsm(),
            'createLunaClient' => $this->createLunaClient(),
            'deleteHapg' => $this->deleteHapg(),
            'deleteHsm' => $this->deleteHsm(),
            'deleteLunaClient' => $this->deleteLunaClient(),
            'describeHapg' => $this->describeHapg(),
            'describeHsm' => $this->describeHsm(),
            'describeLunaClient' => $this->describeLunaClient(),
            'getConfig' => $this->getConfig(),
            'listAvailableZones' => $this->listAvailableZones(),
            'listHapgs' => $this->listHapgs(),
            'listHsms' => $this->listHsms(),
            'listLunaClients' => $this->listLunaClients(),
            'listTagsForResource' => $this->listTagsForResource(),
            'modifyHapg' => $this->modifyHapg(),
            'modifyHsm' => $this->modifyHsm(),
            'modifyLunaClient' => $this->modifyLunaClient(),
            'removeTagsFromResource' => $this->removeTagsFromResource(),
        };
    }
    private function addTagsToResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createHapg(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HapgArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createHsm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HsmArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLunaClient(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClientArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteHapg(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteHsm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteLunaClient(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeHapg(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HapgArn'),
                new \PHPStan\Type\Constant\ConstantStringType('HapgSerial'),
                new \PHPStan\Type\Constant\ConstantStringType('HsmsLastActionFailed'),
                new \PHPStan\Type\Constant\ConstantStringType('HsmsPendingDeletion'),
                new \PHPStan\Type\Constant\ConstantStringType('HsmsPendingRegistration'),
                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('PartitionSerialList'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                ]),
            ]),
        ]);
    }
    private function describeHsm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HsmArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                new \PHPStan\Type\Constant\ConstantStringType('EniId'),
                new \PHPStan\Type\Constant\ConstantStringType('EniIp'),
                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionType'),
                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionStartDate'),
                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionEndDate'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                new \PHPStan\Type\Constant\ConstantStringType('IamRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('VendorName'),
                new \PHPStan\Type\Constant\ConstantStringType('HsmType'),
                new \PHPStan\Type\Constant\ConstantStringType('SoftwareVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('SshPublicKey'),
                new \PHPStan\Type\Constant\ConstantStringType('SshKeyLastUpdated'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerCertUri'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerCertLastUpdated'),
                new \PHPStan\Type\Constant\ConstantStringType('Partitions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('PRODUCTION'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeLunaClient(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClientArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                new \PHPStan\Type\Constant\ConstantStringType('CertificateFingerprint'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('Label'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigType'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigFile'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigCred'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAvailableZones(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AZList'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHapgs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HapgList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHsms(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HsmList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLunaClients(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClientList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TagList'),
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
    private function modifyHapg(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HapgArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function modifyHsm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HsmArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function modifyLunaClient(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClientArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeTagsFromResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}