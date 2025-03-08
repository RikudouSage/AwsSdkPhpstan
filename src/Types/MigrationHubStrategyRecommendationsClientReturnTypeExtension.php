<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MigrationHubStrategyRecommendationsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MigrationHubStrategyRecommendations\MigrationHubStrategyRecommendationsClient>
     */
    public function getClass(): string
    {
        return \Aws\MigrationHubStrategyRecommendations\MigrationHubStrategyRecommendationsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'getApplicationComponentDetails',
            'getApplicationComponentStrategies',
            'getAssessment',
            'getImportFileTask',
            'getLatestAssessmentId',
            'getPortfolioPreferences',
            'getPortfolioSummary',
            'getRecommendationReportDetails',
            'getServerDetails',
            'getServerStrategies',
            'listAnalyzableServers',
            'listApplicationComponents',
            'listCollectors',
            'listImportFileTask',
            'listServers',
            'putPortfolioPreferences',
            'startAssessment',
            'startImportFileTask',
            'startRecommendationReportGeneration',
            'stopAssessment',
            'updateApplicationComponentConfig',
            'updateServerConfig',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'getApplicationComponentDetails' => $this->getApplicationComponentDetails(),
            'getApplicationComponentStrategies' => $this->getApplicationComponentStrategies(),
            'getAssessment' => $this->getAssessment(),
            'getImportFileTask' => $this->getImportFileTask(),
            'getLatestAssessmentId' => $this->getLatestAssessmentId(),
            'getPortfolioPreferences' => $this->getPortfolioPreferences(),
            'getPortfolioSummary' => $this->getPortfolioSummary(),
            'getRecommendationReportDetails' => $this->getRecommendationReportDetails(),
            'getServerDetails' => $this->getServerDetails(),
            'getServerStrategies' => $this->getServerStrategies(),
            'listAnalyzableServers' => $this->listAnalyzableServers(),
            'listApplicationComponents' => $this->listApplicationComponents(),
            'listCollectors' => $this->listCollectors(),
            'listImportFileTask' => $this->listImportFileTask(),
            'listServers' => $this->listServers(),
            'putPortfolioPreferences' => $this->putPortfolioPreferences(),
            'startAssessment' => $this->startAssessment(),
            'startImportFileTask' => $this->startImportFileTask(),
            'startRecommendationReportGeneration' => $this->startRecommendationReportGeneration(),
            'stopAssessment' => $this->stopAssessment(),
            'updateApplicationComponentConfig' => $this->updateApplicationComponentConfig(),
            'updateServerConfig' => $this->updateServerConfig(),
        };
    }
    private function getApplicationComponentDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationComponentDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('associatedApplications'),
                new \PHPStan\Type\Constant\ConstantStringType('associatedServerIds'),
                new \PHPStan\Type\Constant\ConstantStringType('moreApplicationResource'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('analysisStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportS3Object'),
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('appType'),
                    new \PHPStan\Type\Constant\ConstantStringType('appUnitError'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedServerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('databaseConfigDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('inclusionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAnalyzedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('listAntipatternSeveritySummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('moreServerAssociationExists'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('osDriver'),
                    new \PHPStan\Type\Constant\ConstantStringType('osVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationSet'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceSubType'),
                    new \PHPStan\Type\Constant\ConstantStringType('resultList'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtimeStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceCodeRepositories'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_TO_BE_SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_PARTIAL_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNCONFIGURED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DotNetFramework'),
                        new \PHPStan\Type\Constant\ConstantStringType('Java'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQLServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('IIS'),
                        new \PHPStan\Type\Constant\ConstantStringType('Oracle'),
                        new \PHPStan\Type\Constant\ConstantStringType('Other'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tomcat'),
                        new \PHPStan\Type\Constant\ConstantStringType('JBoss'),
                        new \PHPStan\Type\Constant\ConstantStringType('Spring'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mongo DB'),
                        new \PHPStan\Type\Constant\ConstantStringType('DB2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Maria DB'),
                        new \PHPStan\Type\Constant\ConstantStringType('MySQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sybase'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostgreSQLServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cassandra'),
                        new \PHPStan\Type\Constant\ConstantStringType('IBM WebSphere'),
                        new \PHPStan\Type\Constant\ConstantStringType('Oracle WebLogic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Visual Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('DotnetCore'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dotnet'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('appUnitErrorCategory'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREDENTIAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTIVITY_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PERMISSION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER_ERROR'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('excludeFromAssessment'),
                        new \PHPStan\Type\Constant\ConstantStringType('includeInAssessment'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('strategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('transformationTool'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Rehost'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retirement'),
                            new \PHPStan\Type\Constant\ConstantStringType('Refactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('Replatform'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retain'),
                            new \PHPStan\Type\Constant\ConstantStringType('Relocate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Repurchase'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('None specified'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS Elastic BeanStalk'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS Fargate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Cloud Compute (EC2)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Container Service (ECS)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Kubernetes Service (EKS)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Aurora MySQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Aurora PostgreSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service on MySQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service on PostgreSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon DocumentDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon DynamoDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service'),
                            new \PHPStan\Type\Constant\ConstantStringType('Babelfish for Aurora PostgreSQL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('tranformationToolInstallationLink'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('App2Container'),
                                new \PHPStan\Type\Constant\ConstantStringType('Porting Assistant For .NET'),
                                new \PHPStan\Type\Constant\ConstantStringType('End of Support Migration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Windows Web Application Migration Assistant'),
                                new \PHPStan\Type\Constant\ConstantStringType('Application Migration Service'),
                                new \PHPStan\Type\Constant\ConstantStringType('Strategy Recommendation Support'),
                                new \PHPStan\Type\Constant\ConstantStringType('In Place Operating System Upgrade'),
                                new \PHPStan\Type\Constant\ConstantStringType('Schema Conversion Tool'),
                                new \PHPStan\Type\Constant\ConstantStringType('Database Migration Service'),
                                new \PHPStan\Type\Constant\ConstantStringType('Native SQL Server Backup/Restore'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Database'),
                        new \PHPStan\Type\Constant\ConstantStringType('Process'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseProcess'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('analysisStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('analysisType'),
                        new \PHPStan\Type\Constant\ConstantStringType('antipatternReportResultList'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('runtimeAnalysisStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('srcCodeOrDbAnalysisStatus'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_TO_BE_SCHEDULED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_STARTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_FAILED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_TO_BE_SCHEDULED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_STARTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_PARTIAL_SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNCONFIGURED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE_CODE_ANALYSIS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATABASE_ANALYSIS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNTIME_ANALYSIS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BINARY_ANALYSIS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('analyzerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('antiPatternReportS3Object'),
                            new \PHPStan\Type\Constant\ConstantStringType('antipatternReportStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('antipatternReportStatusMessage'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('binaryAnalyzerName'),
                                new \PHPStan\Type\Constant\ConstantStringType('runTimeAnalyzerName'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceCodeAnalyzerName'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DLL_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BYTECODE_ANALYZER'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('A2C_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REHOST_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EMP_PA_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATABASE_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SCT_ANALYZER'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSHARP_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JAVA_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BYTECODE_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PORTING_ASSISTANT'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3key'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_TO_BE_SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('projectName'),
                        new \PHPStan\Type\Constant\ConstantStringType('repository'),
                        new \PHPStan\Type\Constant\ConstantStringType('versionControlType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getApplicationComponentStrategies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationComponentStrategies'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('isPreferred'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('strategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('transformationTool'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Rehost'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retirement'),
                            new \PHPStan\Type\Constant\ConstantStringType('Refactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('Replatform'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retain'),
                            new \PHPStan\Type\Constant\ConstantStringType('Relocate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Repurchase'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('None specified'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS Elastic BeanStalk'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS Fargate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Cloud Compute (EC2)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Container Service (ECS)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Kubernetes Service (EKS)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Aurora MySQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Aurora PostgreSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service on MySQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service on PostgreSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon DocumentDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon DynamoDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service'),
                            new \PHPStan\Type\Constant\ConstantStringType('Babelfish for Aurora PostgreSQL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('tranformationToolInstallationLink'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('App2Container'),
                                new \PHPStan\Type\Constant\ConstantStringType('Porting Assistant For .NET'),
                                new \PHPStan\Type\Constant\ConstantStringType('End of Support Migration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Windows Web Application Migration Assistant'),
                                new \PHPStan\Type\Constant\ConstantStringType('Application Migration Service'),
                                new \PHPStan\Type\Constant\ConstantStringType('Strategy Recommendation Support'),
                                new \PHPStan\Type\Constant\ConstantStringType('In Place Operating System Upgrade'),
                                new \PHPStan\Type\Constant\ConstantStringType('Schema Conversion Tool'),
                                new \PHPStan\Type\Constant\ConstantStringType('Database Migration Service'),
                                new \PHPStan\Type\Constant\ConstantStringType('Native SQL Server Backup/Restore'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('recommended'),
                        new \PHPStan\Type\Constant\ConstantStringType('viableOption'),
                        new \PHPStan\Type\Constant\ConstantStringType('notRecommended'),
                        new \PHPStan\Type\Constant\ConstantStringType('potential'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentTargets'),
                new \PHPStan\Type\Constant\ConstantStringType('dataCollectionDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('condition'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('values'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EQUALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUALS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CONTAINS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('completionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('failed'),
                    new \PHPStan\Type\Constant\ConstantStringType('inProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('servers'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('success'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getImportFileTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('completionTime'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('importName'),
                new \PHPStan\Type\Constant\ConstantStringType('inputS3Bucket'),
                new \PHPStan\Type\Constant\ConstantStringType('inputS3Key'),
                new \PHPStan\Type\Constant\ConstantStringType('numberOfRecordsFailed'),
                new \PHPStan\Type\Constant\ConstantStringType('numberOfRecordsSuccess'),
                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReportS3Bucket'),
                new \PHPStan\Type\Constant\ConstantStringType('statusReportS3Key'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ImportInProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportPartialSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteInProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletePartialSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteSuccess'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getLatestAssessmentId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPortfolioPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationMode'),
                new \PHPStan\Type\Constant\ConstantStringType('applicationPreferences'),
                new \PHPStan\Type\Constant\ConstantStringType('databasePreferences'),
                new \PHPStan\Type\Constant\ConstantStringType('prioritizeBusinessGoals'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    new \PHPStan\Type\Constant\ConstantStringType('KNOWN'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('managementPreference'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('awsManagedResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('noPreference'),
                        new \PHPStan\Type\Constant\ConstantStringType('selfManageResources'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetDestination'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('None specified'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS Elastic BeanStalk'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS Fargate'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetDestination'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('None specified'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS Elastic BeanStalk'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS Fargate'),
                                new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Cloud Compute (EC2)'),
                                new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Container Service (ECS)'),
                                new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Kubernetes Service (EKS)'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetDestination'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('None specified'),
                                new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Cloud Compute (EC2)'),
                                new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Container Service (ECS)'),
                                new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Kubernetes Service (EKS)'),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('databaseManagementPreference'),
                    new \PHPStan\Type\Constant\ConstantStringType('databaseMigrationPreference'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS-managed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Self-manage'),
                        new \PHPStan\Type\Constant\ConstantStringType('No preference'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('heterogeneous'),
                        new \PHPStan\Type\Constant\ConstantStringType('homogeneous'),
                        new \PHPStan\Type\Constant\ConstantStringType('noPreference'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetDatabaseEngine'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('None specified'),
                                new \PHPStan\Type\Constant\ConstantStringType('Amazon Aurora'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS PostgreSQL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MySQL'),
                                new \PHPStan\Type\Constant\ConstantStringType('Microsoft SQL Server'),
                                new \PHPStan\Type\Constant\ConstantStringType('Oracle Database'),
                                new \PHPStan\Type\Constant\ConstantStringType('MariaDB'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAP'),
                                new \PHPStan\Type\Constant\ConstantStringType('Db2 LUW'),
                                new \PHPStan\Type\Constant\ConstantStringType('MongoDB'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetDatabaseEngine'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('None specified'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetDatabaseEngine'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('None specified'),
                                new \PHPStan\Type\Constant\ConstantStringType('Amazon Aurora'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS PostgreSQL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MySQL'),
                                new \PHPStan\Type\Constant\ConstantStringType('Microsoft SQL Server'),
                                new \PHPStan\Type\Constant\ConstantStringType('Oracle Database'),
                                new \PHPStan\Type\Constant\ConstantStringType('MariaDB'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAP'),
                                new \PHPStan\Type\Constant\ConstantStringType('Db2 LUW'),
                                new \PHPStan\Type\Constant\ConstantStringType('MongoDB'),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('businessGoals'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('licenseCostReduction'),
                        new \PHPStan\Type\Constant\ConstantStringType('modernizeInfrastructureWithCloudNativeTechnologies'),
                        new \PHPStan\Type\Constant\ConstantStringType('reduceOperationalOverheadWithManagedServices'),
                        new \PHPStan\Type\Constant\ConstantStringType('speedOfMigration'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getPortfolioSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportS3Object'),
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAnalyzedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('listAntipatternSeveritySummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('listApplicationComponentStatusSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('listApplicationComponentStrategySummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('listApplicationComponentSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('listServerStatusSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('listServerStrategySummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('listServerSummary'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('srcCodeOrDbAnalysisStatus'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_TO_BE_SCHEDULED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_PARTIAL_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNCONFIGURED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('strategy'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Rehost'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retirement'),
                            new \PHPStan\Type\Constant\ConstantStringType('Refactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('Replatform'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retain'),
                            new \PHPStan\Type\Constant\ConstantStringType('Relocate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Repurchase'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('appType'),
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DotNetFramework'),
                            new \PHPStan\Type\Constant\ConstantStringType('Java'),
                            new \PHPStan\Type\Constant\ConstantStringType('SQLServer'),
                            new \PHPStan\Type\Constant\ConstantStringType('IIS'),
                            new \PHPStan\Type\Constant\ConstantStringType('Oracle'),
                            new \PHPStan\Type\Constant\ConstantStringType('Other'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tomcat'),
                            new \PHPStan\Type\Constant\ConstantStringType('JBoss'),
                            new \PHPStan\Type\Constant\ConstantStringType('Spring'),
                            new \PHPStan\Type\Constant\ConstantStringType('Mongo DB'),
                            new \PHPStan\Type\Constant\ConstantStringType('DB2'),
                            new \PHPStan\Type\Constant\ConstantStringType('Maria DB'),
                            new \PHPStan\Type\Constant\ConstantStringType('MySQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sybase'),
                            new \PHPStan\Type\Constant\ConstantStringType('PostgreSQLServer'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cassandra'),
                            new \PHPStan\Type\Constant\ConstantStringType('IBM WebSphere'),
                            new \PHPStan\Type\Constant\ConstantStringType('Oracle WebLogic'),
                            new \PHPStan\Type\Constant\ConstantStringType('Visual Basic'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('DotnetCore'),
                            new \PHPStan\Type\Constant\ConstantStringType('Dotnet'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('runTimeAssessmentStatus'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskToBeScheduled'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskScheduled'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskStarted'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskStopped'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskSuccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskPartialSuccess'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('strategy'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Rehost'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retirement'),
                            new \PHPStan\Type\Constant\ConstantStringType('Refactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('Replatform'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retain'),
                            new \PHPStan\Type\Constant\ConstantStringType('Relocate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Repurchase'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServerOsType'),
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WindowsServer'),
                            new \PHPStan\Type\Constant\ConstantStringType('AmazonLinux'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndOfSupportWindowsServer'),
                            new \PHPStan\Type\Constant\ConstantStringType('Redhat'),
                            new \PHPStan\Type\Constant\ConstantStringType('Other'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getRecommendationReportDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('recommendationReportDetails'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('completionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Keys'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getServerDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('associatedApplications'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('serverDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportS3Object'),
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('applicationComponentStrategySummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataCollectionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAnalyzedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('listAntipatternSeveritySummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationSet'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverError'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverType'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('systemInfo'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('strategy'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Rehost'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retirement'),
                            new \PHPStan\Type\Constant\ConstantStringType('Refactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('Replatform'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retain'),
                            new \PHPStan\Type\Constant\ConstantStringType('Relocate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Repurchase'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskToBeScheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskScheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskStopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskSuccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskPartialSuccess'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('strategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('transformationTool'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Rehost'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retirement'),
                            new \PHPStan\Type\Constant\ConstantStringType('Refactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('Replatform'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retain'),
                            new \PHPStan\Type\Constant\ConstantStringType('Relocate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Repurchase'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('None specified'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS Elastic BeanStalk'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS Fargate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Cloud Compute (EC2)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Container Service (ECS)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Kubernetes Service (EKS)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Aurora MySQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Aurora PostgreSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service on MySQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service on PostgreSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon DocumentDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon DynamoDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service'),
                            new \PHPStan\Type\Constant\ConstantStringType('Babelfish for Aurora PostgreSQL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('tranformationToolInstallationLink'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('App2Container'),
                                new \PHPStan\Type\Constant\ConstantStringType('Porting Assistant For .NET'),
                                new \PHPStan\Type\Constant\ConstantStringType('End of Support Migration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Windows Web Application Migration Assistant'),
                                new \PHPStan\Type\Constant\ConstantStringType('Application Migration Service'),
                                new \PHPStan\Type\Constant\ConstantStringType('Strategy Recommendation Support'),
                                new \PHPStan\Type\Constant\ConstantStringType('In Place Operating System Upgrade'),
                                new \PHPStan\Type\Constant\ConstantStringType('Schema Conversion Tool'),
                                new \PHPStan\Type\Constant\ConstantStringType('Database Migration Service'),
                                new \PHPStan\Type\Constant\ConstantStringType('Native SQL Server Backup/Restore'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serverErrorCategory'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTIVITY_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREDENTIAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PERMISSION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHITECTURE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER_ERROR'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cpuArchitecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileSystemType'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInfoList'),
                        new \PHPStan\Type\Constant\ConstantStringType('osInfo'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('interfaceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('netMask'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getServerStrategies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serverStrategies'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('isPreferred'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfApplicationComponents'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('strategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('transformationTool'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Rehost'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retirement'),
                            new \PHPStan\Type\Constant\ConstantStringType('Refactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('Replatform'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retain'),
                            new \PHPStan\Type\Constant\ConstantStringType('Relocate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Repurchase'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('None specified'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS Elastic BeanStalk'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS Fargate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Cloud Compute (EC2)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Container Service (ECS)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Kubernetes Service (EKS)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Aurora MySQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Aurora PostgreSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service on MySQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service on PostgreSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon DocumentDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon DynamoDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service'),
                            new \PHPStan\Type\Constant\ConstantStringType('Babelfish for Aurora PostgreSQL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('tranformationToolInstallationLink'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('App2Container'),
                                new \PHPStan\Type\Constant\ConstantStringType('Porting Assistant For .NET'),
                                new \PHPStan\Type\Constant\ConstantStringType('End of Support Migration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Windows Web Application Migration Assistant'),
                                new \PHPStan\Type\Constant\ConstantStringType('Application Migration Service'),
                                new \PHPStan\Type\Constant\ConstantStringType('Strategy Recommendation Support'),
                                new \PHPStan\Type\Constant\ConstantStringType('In Place Operating System Upgrade'),
                                new \PHPStan\Type\Constant\ConstantStringType('Schema Conversion Tool'),
                                new \PHPStan\Type\Constant\ConstantStringType('Database Migration Service'),
                                new \PHPStan\Type\Constant\ConstantStringType('Native SQL Server Backup/Restore'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('recommended'),
                        new \PHPStan\Type\Constant\ConstantStringType('viableOption'),
                        new \PHPStan\Type\Constant\ConstantStringType('notRecommended'),
                        new \PHPStan\Type\Constant\ConstantStringType('potential'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listAnalyzableServers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analyzableServers'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                    new \PHPStan\Type\Constant\ConstantStringType('vmId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listApplicationComponents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('applicationComponentInfos'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('analysisStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportS3Object'),
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('appType'),
                    new \PHPStan\Type\Constant\ConstantStringType('appUnitError'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedServerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('databaseConfigDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('inclusionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAnalyzedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('listAntipatternSeveritySummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('moreServerAssociationExists'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('osDriver'),
                    new \PHPStan\Type\Constant\ConstantStringType('osVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationSet'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceSubType'),
                    new \PHPStan\Type\Constant\ConstantStringType('resultList'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtimeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtimeStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceCodeRepositories'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_TO_BE_SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_PARTIAL_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNCONFIGURED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DotNetFramework'),
                        new \PHPStan\Type\Constant\ConstantStringType('Java'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQLServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('IIS'),
                        new \PHPStan\Type\Constant\ConstantStringType('Oracle'),
                        new \PHPStan\Type\Constant\ConstantStringType('Other'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tomcat'),
                        new \PHPStan\Type\Constant\ConstantStringType('JBoss'),
                        new \PHPStan\Type\Constant\ConstantStringType('Spring'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mongo DB'),
                        new \PHPStan\Type\Constant\ConstantStringType('DB2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Maria DB'),
                        new \PHPStan\Type\Constant\ConstantStringType('MySQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sybase'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostgreSQLServer'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cassandra'),
                        new \PHPStan\Type\Constant\ConstantStringType('IBM WebSphere'),
                        new \PHPStan\Type\Constant\ConstantStringType('Oracle WebLogic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Visual Basic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('DotnetCore'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dotnet'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('appUnitErrorCategory'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREDENTIAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTIVITY_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PERMISSION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER_ERROR'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('excludeFromAssessment'),
                        new \PHPStan\Type\Constant\ConstantStringType('includeInAssessment'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('strategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('transformationTool'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Rehost'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retirement'),
                            new \PHPStan\Type\Constant\ConstantStringType('Refactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('Replatform'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retain'),
                            new \PHPStan\Type\Constant\ConstantStringType('Relocate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Repurchase'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('None specified'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS Elastic BeanStalk'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS Fargate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Cloud Compute (EC2)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Container Service (ECS)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Kubernetes Service (EKS)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Aurora MySQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Aurora PostgreSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service on MySQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service on PostgreSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon DocumentDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon DynamoDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service'),
                            new \PHPStan\Type\Constant\ConstantStringType('Babelfish for Aurora PostgreSQL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('tranformationToolInstallationLink'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('App2Container'),
                                new \PHPStan\Type\Constant\ConstantStringType('Porting Assistant For .NET'),
                                new \PHPStan\Type\Constant\ConstantStringType('End of Support Migration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Windows Web Application Migration Assistant'),
                                new \PHPStan\Type\Constant\ConstantStringType('Application Migration Service'),
                                new \PHPStan\Type\Constant\ConstantStringType('Strategy Recommendation Support'),
                                new \PHPStan\Type\Constant\ConstantStringType('In Place Operating System Upgrade'),
                                new \PHPStan\Type\Constant\ConstantStringType('Schema Conversion Tool'),
                                new \PHPStan\Type\Constant\ConstantStringType('Database Migration Service'),
                                new \PHPStan\Type\Constant\ConstantStringType('Native SQL Server Backup/Restore'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Database'),
                        new \PHPStan\Type\Constant\ConstantStringType('Process'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseProcess'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('analysisStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('analysisType'),
                        new \PHPStan\Type\Constant\ConstantStringType('antipatternReportResultList'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('runtimeAnalysisStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('srcCodeOrDbAnalysisStatus'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_TO_BE_SCHEDULED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_STARTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_FAILED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_TO_BE_SCHEDULED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_STARTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_PARTIAL_SUCCESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNCONFIGURED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOURCE_CODE_ANALYSIS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATABASE_ANALYSIS'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNTIME_ANALYSIS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BINARY_ANALYSIS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('analyzerName'),
                            new \PHPStan\Type\Constant\ConstantStringType('antiPatternReportS3Object'),
                            new \PHPStan\Type\Constant\ConstantStringType('antipatternReportStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('antipatternReportStatusMessage'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('binaryAnalyzerName'),
                                new \PHPStan\Type\Constant\ConstantStringType('runTimeAnalyzerName'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceCodeAnalyzerName'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DLL_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BYTECODE_ANALYZER'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('A2C_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REHOST_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EMP_PA_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATABASE_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SCT_ANALYZER'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSHARP_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JAVA_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BYTECODE_ANALYZER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PORTING_ASSISTANT'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3key'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_TO_BE_SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANALYSIS_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('projectName'),
                        new \PHPStan\Type\Constant\ConstantStringType('repository'),
                        new \PHPStan\Type\Constant\ConstantStringType('versionControlType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCollectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Collectors'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('collectorHealth'),
                    new \PHPStan\Type\Constant\ConstantStringType('collectorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('collectorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastActivityTimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('registeredTimeStamp'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COLLECTOR_HEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('COLLECTOR_UNHEALTHY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipAddressBasedRemoteInfoList'),
                        new \PHPStan\Type\Constant\ConstantStringType('pipelineInfoList'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteSourceCodeAnalysisServerInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('vcenterBasedRemoteInfoList'),
                        new \PHPStan\Type\Constant\ConstantStringType('versionControlInfoList'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipAddressConfigurationTimeStamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('osType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NTLM'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSH'),
                                new \PHPStan\Type\Constant\ConstantStringType('CERT'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('pipelineConfigurationTimeStamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('pipelineType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('AZURE_DEVOPS'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('remoteSourceCodeAnalysisServerConfigurationTimestamp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('osType'),
                            new \PHPStan\Type\Constant\ConstantStringType('vcenterConfigurationTimeStamp'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('versionControlConfigurationTimeStamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('versionControlType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                                new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AZURE_DEVOPS_GIT'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImportFileTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('taskInfos'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('completionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('importName'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputS3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputS3Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfRecordsFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfRecordsSuccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReportS3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReportS3Key'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ImportInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImportFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImportPartialSuccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImportSuccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeletePartialSuccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteSuccess'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listServers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('serverInfos'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportS3Object'),
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('antipatternReportStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('applicationComponentStrategySummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataCollectionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAnalyzedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('listAntipatternSeveritySummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendationSet'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverError'),
                    new \PHPStan\Type\Constant\ConstantStringType('serverType'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('systemInfo'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('strategy'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Rehost'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retirement'),
                            new \PHPStan\Type\Constant\ConstantStringType('Refactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('Replatform'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retain'),
                            new \PHPStan\Type\Constant\ConstantStringType('Relocate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Repurchase'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskToBeScheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskScheduled'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskStarted'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskStopped'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskSuccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataCollectionTaskPartialSuccess'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('strategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('transformationTool'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Rehost'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retirement'),
                            new \PHPStan\Type\Constant\ConstantStringType('Refactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('Replatform'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retain'),
                            new \PHPStan\Type\Constant\ConstantStringType('Relocate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Repurchase'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('None specified'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS Elastic BeanStalk'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS Fargate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Cloud Compute (EC2)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Container Service (ECS)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Elastic Kubernetes Service (EKS)'),
                            new \PHPStan\Type\Constant\ConstantStringType('Aurora MySQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Aurora PostgreSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service on MySQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service on PostgreSQL'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon DocumentDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon DynamoDB'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Relational Database Service'),
                            new \PHPStan\Type\Constant\ConstantStringType('Babelfish for Aurora PostgreSQL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('tranformationToolInstallationLink'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('App2Container'),
                                new \PHPStan\Type\Constant\ConstantStringType('Porting Assistant For .NET'),
                                new \PHPStan\Type\Constant\ConstantStringType('End of Support Migration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Windows Web Application Migration Assistant'),
                                new \PHPStan\Type\Constant\ConstantStringType('Application Migration Service'),
                                new \PHPStan\Type\Constant\ConstantStringType('Strategy Recommendation Support'),
                                new \PHPStan\Type\Constant\ConstantStringType('In Place Operating System Upgrade'),
                                new \PHPStan\Type\Constant\ConstantStringType('Schema Conversion Tool'),
                                new \PHPStan\Type\Constant\ConstantStringType('Database Migration Service'),
                                new \PHPStan\Type\Constant\ConstantStringType('Native SQL Server Backup/Restore'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serverErrorCategory'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTIVITY_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREDENTIAL_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PERMISSION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHITECTURE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER_ERROR'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cpuArchitecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileSystemType'),
                        new \PHPStan\Type\Constant\ConstantStringType('networkInfoList'),
                        new \PHPStan\Type\Constant\ConstantStringType('osInfo'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('interfaceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('macAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('netMask'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LINUX'),
                                new \PHPStan\Type\Constant\ConstantStringType('WINDOWS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putPortfolioPreferences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('assessmentId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startImportFileTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startRecommendationReportGeneration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopAssessment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateApplicationComponentConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateServerConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}