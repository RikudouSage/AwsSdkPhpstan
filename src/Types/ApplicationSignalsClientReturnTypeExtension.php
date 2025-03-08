<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ApplicationSignalsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ApplicationSignals\ApplicationSignalsClient>
     */
    public function getClass(): string
    {
        return \Aws\ApplicationSignals\ApplicationSignalsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchGetServiceLevelObjectiveBudgetReport',
            'createServiceLevelObjective',
            'deleteServiceLevelObjective',
            'getService',
            'getServiceLevelObjective',
            'listServiceDependencies',
            'listServiceDependents',
            'listServiceLevelObjectives',
            'listServiceOperations',
            'listServices',
            'listTagsForResource',
            'startDiscovery',
            'tagResource',
            'untagResource',
            'updateServiceLevelObjective',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchGetServiceLevelObjectiveBudgetReport' => $this->batchGetServiceLevelObjectiveBudgetReport(),
            'createServiceLevelObjective' => $this->createServiceLevelObjective(),
            'deleteServiceLevelObjective' => $this->deleteServiceLevelObjective(),
            'getService' => $this->getService(),
            'getServiceLevelObjective' => $this->getServiceLevelObjective(),
            'listServiceDependencies' => $this->listServiceDependencies(),
            'listServiceDependents' => $this->listServiceDependents(),
            'listServiceLevelObjectives' => $this->listServiceLevelObjectives(),
            'listServiceOperations' => $this->listServiceOperations(),
            'listServices' => $this->listServices(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startDiscovery' => $this->startDiscovery(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateServiceLevelObjective' => $this->updateServiceLevelObjective(),
        };
    }
    private function batchGetServiceLevelObjectiveBudgetReport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('Reports'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attainment'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalBudgetSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetSecondsRemaining'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalBudgetRequests'),
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetRequestsRemaining'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sli'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestBasedSli'),
                    new \PHPStan\Type\Constant\ConstantStringType('Goal'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodBased'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestBased'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OK'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('BREACHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SliMetric'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricDataQueries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LATENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RequestBasedSliMetric'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalRequestCountMetric'),
                            new \PHPStan\Type\Constant\ConstantStringType('MonitoredRequestCountMetric'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LATENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GoodCountMetric'),
                                new \PHPStan\Type\Constant\ConstantStringType('BadCountMetric'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttainmentGoal'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarningThreshold'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RollingInterval'),
                            new \PHPStan\Type\Constant\ConstantStringType('CalendarInterval'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DurationUnit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('DurationUnit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createServiceLevelObjective(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Slo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sli'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestBasedSli'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Goal'),
                    new \PHPStan\Type\Constant\ConstantStringType('BurnRateConfigurations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SliMetric'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricDataQueries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LATENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RequestBasedSliMetric'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalRequestCountMetric'),
                            new \PHPStan\Type\Constant\ConstantStringType('MonitoredRequestCountMetric'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LATENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GoodCountMetric'),
                                new \PHPStan\Type\Constant\ConstantStringType('BadCountMetric'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodBased'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestBased'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttainmentGoal'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarningThreshold'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RollingInterval'),
                            new \PHPStan\Type\Constant\ConstantStringType('CalendarInterval'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DurationUnit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('DurationUnit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LookBackWindowMinutes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteServiceLevelObjective(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Service'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LogGroupReferences'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeMaps'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricReferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupReferences'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getServiceLevelObjective(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Slo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sli'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestBasedSli'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Goal'),
                    new \PHPStan\Type\Constant\ConstantStringType('BurnRateConfigurations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SliMetric'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricDataQueries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LATENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RequestBasedSliMetric'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalRequestCountMetric'),
                            new \PHPStan\Type\Constant\ConstantStringType('MonitoredRequestCountMetric'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LATENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GoodCountMetric'),
                                new \PHPStan\Type\Constant\ConstantStringType('BadCountMetric'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodBased'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestBased'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttainmentGoal'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarningThreshold'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RollingInterval'),
                            new \PHPStan\Type\Constant\ConstantStringType('CalendarInterval'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DurationUnit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('DurationUnit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LookBackWindowMinutes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listServiceDependencies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceDependencies'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DependencyKeyAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DependencyOperationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricReferences'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServiceDependents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceDependents'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DependentKeyAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('DependentOperationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricReferences'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServiceLevelObjectives(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SloSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServiceOperations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceOperations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricReferences'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttributeMaps'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricReferences'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
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
    private function startDiscovery(): ?\PHPStan\Type\Type
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
    private function updateServiceLevelObjective(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Slo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sli'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestBasedSli'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Goal'),
                    new \PHPStan\Type\Constant\ConstantStringType('BurnRateConfigurations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SliMetric'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricDataQueries'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LATENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RequestBasedSliMetric'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricType'),
                            new \PHPStan\Type\Constant\ConstantStringType('TotalRequestCountMetric'),
                            new \PHPStan\Type\Constant\ConstantStringType('MonitoredRequestCountMetric'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LATENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GoodCountMetric'),
                                new \PHPStan\Type\Constant\ConstantStringType('BadCountMetric'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MetricStat'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReturnData'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Metric'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Stat'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
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
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualTo'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualTo'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodBased'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestBased'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Interval'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttainmentGoal'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarningThreshold'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RollingInterval'),
                            new \PHPStan\Type\Constant\ConstantStringType('CalendarInterval'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DurationUnit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('DurationUnit'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LookBackWindowMinutes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
}