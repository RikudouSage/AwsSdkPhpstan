<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ApplicationInsightsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ApplicationInsights\ApplicationInsightsClient>
     */
    public function getClass(): string
    {
        return \Aws\ApplicationInsights\ApplicationInsightsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addWorkload',
            'createApplication',
            'createComponent',
            'createLogPattern',
            'deleteApplication',
            'deleteComponent',
            'deleteLogPattern',
            'describeApplication',
            'describeComponent',
            'describeComponentConfiguration',
            'describeComponentConfigurationRecommendation',
            'describeLogPattern',
            'describeObservation',
            'describeProblem',
            'describeProblemObservations',
            'describeWorkload',
            'listApplications',
            'listComponents',
            'listConfigurationHistory',
            'listLogPatternSets',
            'listLogPatterns',
            'listProblems',
            'listTagsForResource',
            'listWorkloads',
            'removeWorkload',
            'tagResource',
            'untagResource',
            'updateApplication',
            'updateComponent',
            'updateComponentConfiguration',
            'updateLogPattern',
            'updateProblem',
            'updateWorkload',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addWorkload' => $this->addWorkload(),
            'createApplication' => $this->createApplication(),
            'createComponent' => $this->createComponent(),
            'createLogPattern' => $this->createLogPattern(),
            'deleteApplication' => $this->deleteApplication(),
            'deleteComponent' => $this->deleteComponent(),
            'deleteLogPattern' => $this->deleteLogPattern(),
            'describeApplication' => $this->describeApplication(),
            'describeComponent' => $this->describeComponent(),
            'describeComponentConfiguration' => $this->describeComponentConfiguration(),
            'describeComponentConfigurationRecommendation' => $this->describeComponentConfigurationRecommendation(),
            'describeLogPattern' => $this->describeLogPattern(),
            'describeObservation' => $this->describeObservation(),
            'describeProblem' => $this->describeProblem(),
            'describeProblemObservations' => $this->describeProblemObservations(),
            'describeWorkload' => $this->describeWorkload(),
            'listApplications' => $this->listApplications(),
            'listComponents' => $this->listComponents(),
            'listConfigurationHistory' => $this->listConfigurationHistory(),
            'listLogPatternSets' => $this->listLogPatternSets(),
            'listLogPatterns' => $this->listLogPatterns(),
            'listProblems' => $this->listProblems(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWorkloads' => $this->listWorkloads(),
            'removeWorkload' => $this->removeWorkload(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateApplication' => $this->updateApplication(),
            'updateComponent' => $this->updateComponent(),
            'updateComponentConfiguration' => $this->updateComponentConfiguration(),
            'updateLogPattern' => $this->updateLogPattern(),
            'updateProblem' => $this->updateProblem(),
            'updateWorkload' => $this->updateWorkload(),
        };
    }
    private function addWorkload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WORKER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB_TIER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('JAVA_JMX'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_MULTI_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_SINGLE_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_HIGH_AVAILABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_SINGLE_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_HIGH_AVAILABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_FAILOVER_CLUSTER_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_DIRECTORY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_DISTRIBUTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_HIGH_AVAILABILITY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LifeCycle'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpsItemSNSTopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNSNotificationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpsCenterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CWEMonitorEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Remarks'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoConfigEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiscoveryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachMissingPermission'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_GROUP_BASED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_BASED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function createComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createLogPattern(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LogPattern'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceGroupName'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PatternSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PatternName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rank'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLogPattern(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LifeCycle'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpsItemSNSTopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNSNotificationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpsCenterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CWEMonitorEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Remarks'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoConfigEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiscoveryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachMissingPermission'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_GROUP_BASED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_BASED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function describeComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationComponent'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ComponentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComponentRemarks'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('OsType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Monitor'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetectedWorkload'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINUX'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WORKER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB_TIER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('JAVA_JMX'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_MULTI_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_SINGLE_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_HIGH_AVAILABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_SINGLE_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_HIGH_AVAILABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_FAILOVER_CLUSTER_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_DIRECTORY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_DISTRIBUTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_HIGH_AVAILABILITY'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WORKER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB_TIER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('JAVA_JMX'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_MULTI_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_SINGLE_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_HIGH_AVAILABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_SINGLE_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_HIGH_AVAILABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_FAILOVER_CLUSTER_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_DIRECTORY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_DISTRIBUTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_HIGH_AVAILABILITY'),
                    ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeComponentConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Monitor'),
                new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                new \PHPStan\Type\Constant\ConstantStringType('ComponentConfiguration'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_CORE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WORKER'),
                    new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB_TIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB'),
                    new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER'),
                    new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP'),
                    new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                    new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                    new \PHPStan\Type\Constant\ConstantStringType('JAVA_JMX'),
                    new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_MULTI_NODE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_SINGLE_NODE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_HIGH_AVAILABILITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_SINGLE_NODE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_HIGH_AVAILABILITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_FAILOVER_CLUSTER_INSTANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_DIRECTORY'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_STANDARD'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_DISTRIBUTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_HIGH_AVAILABILITY'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeComponentConfigurationRecommendation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ComponentConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeLogPattern(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('LogPattern'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PatternSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PatternName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rank'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeObservation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Observation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('LineTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogText'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogFilter'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchEventId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchEventSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchEventDetailType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthEventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthService'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthEventTypeCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthEventTypeCategory'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthEventDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeDeployDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeDeployDeploymentGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeDeployState'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeDeployApplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('CodeDeployInstanceGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ec2State'),
                    new \PHPStan\Type\Constant\ConstantStringType('RdsEventCategories'),
                    new \PHPStan\Type\Constant\ConstantStringType('RdsEventMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3EventName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatesExecutionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatesArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatesStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatesInput'),
                    new \PHPStan\Type\Constant\ConstantStringType('EbsEvent'),
                    new \PHPStan\Type\Constant\ConstantStringType('EbsResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('EbsCause'),
                    new \PHPStan\Type\Constant\ConstantStringType('EbsRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('XRayFaultPercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('XRayThrottlePercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('XRayErrorPercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('XRayRequestCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('XRayRequestAverageLatency'),
                    new \PHPStan\Type\Constant\ConstantStringType('XRayNodeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('XRayNodeType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                        new \PHPStan\Type\Constant\ConstantStringType('CODE_DEPLOY'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTH'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                    ]),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeProblem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Problem'),
                new \PHPStan\Type\Constant\ConstantStringType('SNSNotificationArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShortName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Insights'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('AffectedResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SeverityLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Feedback'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecurringCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRecurrenceTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResolutionMethod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IGNORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECURRING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECOVERING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Informative'),
                        new \PHPStan\Type\Constant\ConstantStringType('Low'),
                        new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                        new \PHPStan\Type\Constant\ConstantStringType('High'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\Constant\ConstantStringType('INSIGHTS_FEEDBACK'), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_SPECIFIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('USEFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_USEFUL'),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IGNORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VISIBLE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNRESOLVED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeProblemObservations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RelatedObservations'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ObservationList'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('LineTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogText'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricNamespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchEventId'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchEventSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchEventDetailType'),
                            new \PHPStan\Type\Constant\ConstantStringType('HealthEventArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('HealthService'),
                            new \PHPStan\Type\Constant\ConstantStringType('HealthEventTypeCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('HealthEventTypeCategory'),
                            new \PHPStan\Type\Constant\ConstantStringType('HealthEventDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeDeployDeploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeDeployDeploymentGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeDeployState'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeDeployApplication'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeDeployInstanceGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ec2State'),
                            new \PHPStan\Type\Constant\ConstantStringType('RdsEventCategories'),
                            new \PHPStan\Type\Constant\ConstantStringType('RdsEventMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3EventName'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatesExecutionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatesArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatesStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatesInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('EbsEvent'),
                            new \PHPStan\Type\Constant\ConstantStringType('EbsResult'),
                            new \PHPStan\Type\Constant\ConstantStringType('EbsCause'),
                            new \PHPStan\Type\Constant\ConstantStringType('EbsRequestId'),
                            new \PHPStan\Type\Constant\ConstantStringType('XRayFaultPercent'),
                            new \PHPStan\Type\Constant\ConstantStringType('XRayThrottlePercent'),
                            new \PHPStan\Type\Constant\ConstantStringType('XRayErrorPercent'),
                            new \PHPStan\Type\Constant\ConstantStringType('XRayRequestCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('XRayRequestAverageLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('XRayNodeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('XRayNodeType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                                new \PHPStan\Type\Constant\ConstantStringType('CODE_DEPLOY'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEALTH'),
                                new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                            ]),
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
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeWorkload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadRemarks'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WORKER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB_TIER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('JAVA_JMX'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_MULTI_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_SINGLE_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_HIGH_AVAILABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_SINGLE_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_HIGH_AVAILABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_FAILOVER_CLUSTER_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_DIRECTORY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_DISTRIBUTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_HIGH_AVAILABILITY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationInfoList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LifeCycle'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpsItemSNSTopicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNSNotificationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpsCenterEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('CWEMonitorEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Remarks'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoConfigEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('DiscoveryType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachMissingPermission'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_GROUP_BASED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_BASED'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listComponents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationComponentList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ComponentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComponentRemarks'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('OsType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Monitor'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetectedWorkload'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINUX'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WORKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB_TIER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('JAVA_JMX'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_MULTI_NODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_SINGLE_NODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_HIGH_AVAILABILITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_SINGLE_NODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_HIGH_AVAILABILITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_FAILOVER_CLUSTER_INSTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_DIRECTORY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_DISTRIBUTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_HIGH_AVAILABILITY'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WORKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB_TIER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('JAVA_JMX'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_MULTI_NODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_SINGLE_NODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_HIGH_AVAILABILITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_SINGLE_NODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_HIGH_AVAILABILITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_FAILOVER_CLUSTER_INSTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_DIRECTORY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_DISTRIBUTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_HIGH_AVAILABILITY'),
                        ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConfigurationHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MonitoredResourceARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventDetail'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventResourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH_ALARM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH_LOG'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUDFORMATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSM_ASSOCIATION'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLogPatternSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('LogPatternSets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLogPatterns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('LogPatterns'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PatternSetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PatternName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rank'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProblems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProblemList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShortName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Insights'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('AffectedResource'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('SeverityLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Feedback'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecurringCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastRecurrenceTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResolutionMethod'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IGNORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RECURRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RECOVERING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Informative'),
                            new \PHPStan\Type\Constant\ConstantStringType('Low'),
                            new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                            new \PHPStan\Type\Constant\ConstantStringType('High'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\Constant\ConstantStringType('INSIGHTS_FEEDBACK'), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_SPECIFIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('USEFUL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_USEFUL'),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IGNORED'),
                            new \PHPStan\Type\Constant\ConstantStringType('VISIBLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNRESOLVED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listWorkloads(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComponentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkloadName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                        new \PHPStan\Type\Constant\ConstantStringType('WorkloadRemarks'),
                        new \PHPStan\Type\Constant\ConstantStringType('MissingWorkloadConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_CORE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WORKER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB_TIER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('JAVA_JMX'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_MULTI_NODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_SINGLE_NODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_HIGH_AVAILABILITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_SINGLE_NODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_HIGH_AVAILABILITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_FAILOVER_CLUSTER_INSTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_DIRECTORY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_DISTRIBUTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_HIGH_AVAILABILITY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeWorkload(): ?\PHPStan\Type\Type
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
    private function updateApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LifeCycle'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpsItemSNSTopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNSNotificationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpsCenterEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('CWEMonitorEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Remarks'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoConfigEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DiscoveryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachMissingPermission'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_GROUP_BASED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_BASED'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function updateComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateComponentConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLogPattern(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('LogPattern'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PatternSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PatternName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rank'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function updateProblem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateWorkload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadId'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkloadConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WorkloadName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_CORE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WORKER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB_TIER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOT_NET_WEB'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('JAVA_JMX'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_MULTI_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_SINGLE_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_HANA_HIGH_AVAILABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_SINGLE_NODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_ASE_HIGH_AVAILABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL_SERVER_FAILOVER_CLUSTER_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHAREPOINT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE_DIRECTORY'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_DISTRIBUTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAP_NETWEAVER_HIGH_AVAILABILITY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}