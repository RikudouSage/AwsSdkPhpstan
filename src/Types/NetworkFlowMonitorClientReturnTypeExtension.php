<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class NetworkFlowMonitorClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\NetworkFlowMonitor\NetworkFlowMonitorClient>
     */
    public function getClass(): string
    {
        return \Aws\NetworkFlowMonitor\NetworkFlowMonitorClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createMonitor',
            'createScope',
            'deleteMonitor',
            'deleteScope',
            'getMonitor',
            'getQueryResultsMonitorTopContributors',
            'getQueryResultsWorkloadInsightsTopContributors',
            'getQueryResultsWorkloadInsightsTopContributorsData',
            'getQueryStatusMonitorTopContributors',
            'getQueryStatusWorkloadInsightsTopContributors',
            'getQueryStatusWorkloadInsightsTopContributorsData',
            'getScope',
            'listMonitors',
            'listScopes',
            'listTagsForResource',
            'startQueryMonitorTopContributors',
            'startQueryWorkloadInsightsTopContributors',
            'startQueryWorkloadInsightsTopContributorsData',
            'stopQueryMonitorTopContributors',
            'stopQueryWorkloadInsightsTopContributors',
            'stopQueryWorkloadInsightsTopContributorsData',
            'tagResource',
            'untagResource',
            'updateMonitor',
            'updateScope',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createMonitor' => $this->createMonitor(),
            'createScope' => $this->createScope(),
            'deleteMonitor' => $this->deleteMonitor(),
            'deleteScope' => $this->deleteScope(),
            'getMonitor' => $this->getMonitor(),
            'getQueryResultsMonitorTopContributors' => $this->getQueryResultsMonitorTopContributors(),
            'getQueryResultsWorkloadInsightsTopContributors' => $this->getQueryResultsWorkloadInsightsTopContributors(),
            'getQueryResultsWorkloadInsightsTopContributorsData' => $this->getQueryResultsWorkloadInsightsTopContributorsData(),
            'getQueryStatusMonitorTopContributors' => $this->getQueryStatusMonitorTopContributors(),
            'getQueryStatusWorkloadInsightsTopContributors' => $this->getQueryStatusWorkloadInsightsTopContributors(),
            'getQueryStatusWorkloadInsightsTopContributorsData' => $this->getQueryStatusWorkloadInsightsTopContributorsData(),
            'getScope' => $this->getScope(),
            'listMonitors' => $this->listMonitors(),
            'listScopes' => $this->listScopes(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startQueryMonitorTopContributors' => $this->startQueryMonitorTopContributors(),
            'startQueryWorkloadInsightsTopContributors' => $this->startQueryWorkloadInsightsTopContributors(),
            'startQueryWorkloadInsightsTopContributorsData' => $this->startQueryWorkloadInsightsTopContributorsData(),
            'stopQueryMonitorTopContributors' => $this->stopQueryMonitorTopContributors(),
            'stopQueryWorkloadInsightsTopContributors' => $this->stopQueryWorkloadInsightsTopContributors(),
            'stopQueryWorkloadInsightsTopContributorsData' => $this->stopQueryWorkloadInsightsTopContributorsData(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateMonitor' => $this->updateMonitor(),
            'updateScope' => $this->updateScope(),
        };
    }
    private function createMonitor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('monitorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('monitorName'),
                new \PHPStan\Type\Constant\ConstantStringType('monitorStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('localResources'),
                new \PHPStan\Type\Constant\ConstantStringType('remoteResources'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Subnet'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Subnet'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::AWSService'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createScope(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scopeId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('scopeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function deleteMonitor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteScope(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getMonitor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('monitorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('monitorName'),
                new \PHPStan\Type\Constant\ConstantStringType('monitorStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('localResources'),
                new \PHPStan\Type\Constant\ConstantStringType('remoteResources'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Subnet'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Subnet'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::AWSService'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getQueryResultsMonitorTopContributors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                new \PHPStan\Type\Constant\ConstantStringType('topContributors'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                    new \PHPStan\Type\Constant\ConstantStringType('Count'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('None'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('localIp'),
                    new \PHPStan\Type\Constant\ConstantStringType('snatIp'),
                    new \PHPStan\Type\Constant\ConstantStringType('localInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('localVpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('localRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('localAz'),
                    new \PHPStan\Type\Constant\ConstantStringType('localSubnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationCategory'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteVpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteAz'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteSubnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteIp'),
                    new \PHPStan\Type\Constant\ConstantStringType('dnatIp'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('traversedConstructs'),
                    new \PHPStan\Type\Constant\ConstantStringType('kubernetesMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('localInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('localSubnetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('localVpcArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteSubnetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteVpcArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INTRA_AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTER_AZ'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTER_VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNCLASSIFIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_S3'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_DYNAMODB'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('componentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('localServiceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('localPodName'),
                        new \PHPStan\Type\Constant\ConstantStringType('localPodNamespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteServiceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('remotePodName'),
                        new \PHPStan\Type\Constant\ConstantStringType('remotePodNamespace'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getQueryResultsWorkloadInsightsTopContributors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('topContributors'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('localSubnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('localAz'),
                    new \PHPStan\Type\Constant\ConstantStringType('localVpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('localRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('localSubnetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('localVpcArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getQueryResultsWorkloadInsightsTopContributorsData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('unit'),
                new \PHPStan\Type\Constant\ConstantStringType('datapoints'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                    new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                    new \PHPStan\Type\Constant\ConstantStringType('Count'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                    new \PHPStan\Type\Constant\ConstantStringType('None'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('timestamps'),
                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                    new \PHPStan\Type\Constant\ConstantStringType('label'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ObjectType('DateTimeInterface')),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getQueryStatusMonitorTopContributors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                ]),
            ]),
        ]);
    }
    private function getQueryStatusWorkloadInsightsTopContributors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                ]),
            ]),
        ]);
    }
    private function getQueryStatusWorkloadInsightsTopContributorsData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                ]),
            ]),
        ]);
    }
    private function getScope(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scopeId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('scopeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('targets'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('targetIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listMonitors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('monitors'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('monitorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('monitorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('monitorStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listScopes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scopes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('scopeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('scopeArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
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
    private function startQueryMonitorTopContributors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('queryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startQueryWorkloadInsightsTopContributors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('queryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startQueryWorkloadInsightsTopContributorsData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('queryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopQueryMonitorTopContributors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopQueryWorkloadInsightsTopContributors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopQueryWorkloadInsightsTopContributorsData(): ?\PHPStan\Type\Type
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
    private function updateMonitor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('monitorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('monitorName'),
                new \PHPStan\Type\Constant\ConstantStringType('monitorStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('localResources'),
                new \PHPStan\Type\Constant\ConstantStringType('remoteResources'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Subnet'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::AvailabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::EC2::Subnet'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS::AWSService'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateScope(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('scopeId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('scopeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
}