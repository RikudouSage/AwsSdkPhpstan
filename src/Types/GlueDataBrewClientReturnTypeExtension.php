<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class GlueDataBrewClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\GlueDataBrew\GlueDataBrewClient>
     */
    public function getClass(): string
    {
        return \Aws\GlueDataBrew\GlueDataBrewClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchDeleteRecipeVersion',
            'createDataset',
            'createProfileJob',
            'createProject',
            'createRecipe',
            'createRecipeJob',
            'createRuleset',
            'createSchedule',
            'deleteDataset',
            'deleteJob',
            'deleteProject',
            'deleteRecipeVersion',
            'deleteRuleset',
            'deleteSchedule',
            'describeDataset',
            'describeJob',
            'describeJobRun',
            'describeProject',
            'describeRecipe',
            'describeRuleset',
            'describeSchedule',
            'listDatasets',
            'listJobRuns',
            'listJobs',
            'listProjects',
            'listRecipeVersions',
            'listRecipes',
            'listRulesets',
            'listSchedules',
            'listTagsForResource',
            'publishRecipe',
            'sendProjectSessionAction',
            'startJobRun',
            'startProjectSession',
            'stopJobRun',
            'tagResource',
            'untagResource',
            'updateDataset',
            'updateProfileJob',
            'updateProject',
            'updateRecipe',
            'updateRecipeJob',
            'updateRuleset',
            'updateSchedule',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchDeleteRecipeVersion' => $this->batchDeleteRecipeVersion(),
            'createDataset' => $this->createDataset(),
            'createProfileJob' => $this->createProfileJob(),
            'createProject' => $this->createProject(),
            'createRecipe' => $this->createRecipe(),
            'createRecipeJob' => $this->createRecipeJob(),
            'createRuleset' => $this->createRuleset(),
            'createSchedule' => $this->createSchedule(),
            'deleteDataset' => $this->deleteDataset(),
            'deleteJob' => $this->deleteJob(),
            'deleteProject' => $this->deleteProject(),
            'deleteRecipeVersion' => $this->deleteRecipeVersion(),
            'deleteRuleset' => $this->deleteRuleset(),
            'deleteSchedule' => $this->deleteSchedule(),
            'describeDataset' => $this->describeDataset(),
            'describeJob' => $this->describeJob(),
            'describeJobRun' => $this->describeJobRun(),
            'describeProject' => $this->describeProject(),
            'describeRecipe' => $this->describeRecipe(),
            'describeRuleset' => $this->describeRuleset(),
            'describeSchedule' => $this->describeSchedule(),
            'listDatasets' => $this->listDatasets(),
            'listJobRuns' => $this->listJobRuns(),
            'listJobs' => $this->listJobs(),
            'listProjects' => $this->listProjects(),
            'listRecipeVersions' => $this->listRecipeVersions(),
            'listRecipes' => $this->listRecipes(),
            'listRulesets' => $this->listRulesets(),
            'listSchedules' => $this->listSchedules(),
            'listTagsForResource' => $this->listTagsForResource(),
            'publishRecipe' => $this->publishRecipe(),
            'sendProjectSessionAction' => $this->sendProjectSessionAction(),
            'startJobRun' => $this->startJobRun(),
            'startProjectSession' => $this->startProjectSession(),
            'stopJobRun' => $this->stopJobRun(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDataset' => $this->updateDataset(),
            'updateProfileJob' => $this->updateProfileJob(),
            'updateProject' => $this->updateProject(),
            'updateRecipe' => $this->updateRecipe(),
            'updateRecipeJob' => $this->updateRecipeJob(),
            'updateRuleset' => $this->updateRuleset(),
            'updateSchedule' => $this->updateSchedule(),
        };
    }
    private function batchDeleteRecipeVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecipeVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createProfileJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRecipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRecipeJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRuleset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteRecipeVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('RecipeVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteRuleset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Format'),
                new \PHPStan\Type\Constant\ConstantStringType('FormatOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('Input'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('Source'),
                new \PHPStan\Type\Constant\ConstantStringType('PathOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXCEL'),
                    new \PHPStan\Type\Constant\ConstantStringType('ORC'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Json'),
                    new \PHPStan\Type\Constant\ConstantStringType('Excel'),
                    new \PHPStan\Type\Constant\ConstantStringType('Csv'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MultiLine'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SheetNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('SheetIndexes'),
                        new \PHPStan\Type\Constant\ConstantStringType('HeaderRow'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                        new \PHPStan\Type\Constant\ConstantStringType('HeaderRow'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3InputDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataCatalogInputDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseInputDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TempDirectory'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlueConnectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseTableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TempDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                    new \PHPStan\Type\Constant\ConstantStringType('DATA-CATALOG'),
                    new \PHPStan\Type\Constant\ConstantStringType('DATABASE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDateCondition'),
                    new \PHPStan\Type\Constant\ConstantStringType('FilesLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValuesMap'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaxFiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrderedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('Order'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('LAST_MODIFIED_DATE'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DESCENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASCENDING'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatetimeOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateColumn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Datetime'),
                            new \PHPStan\Type\Constant\ConstantStringType('Number'),
                            new \PHPStan\Type\Constant\ConstantStringType('String'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Format'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimezoneOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocaleCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValuesMap'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LogSubscription'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxRetries'),
                new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                new \PHPStan\Type\Constant\ConstantStringType('DataCatalogOutputs'),
                new \PHPStan\Type\Constant\ConstantStringType('DatabaseOutputs'),
                new \PHPStan\Type\Constant\ConstantStringType('ProjectName'),
                new \PHPStan\Type\Constant\ConstantStringType('ProfileConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('ValidationConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('RecipeReference'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                new \PHPStan\Type\Constant\ConstantStringType('JobSample'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SSE-KMS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSE-S3'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PROFILE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RECIPE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLE'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Format'),
                        new \PHPStan\Type\Constant\ConstantStringType('PartitionColumns'),
                        new \PHPStan\Type\Constant\ConstantStringType('Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overwrite'),
                        new \PHPStan\Type\Constant\ConstantStringType('FormatOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxOutputFiles'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                            new \PHPStan\Type\Constant\ConstantStringType('LZ4'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNAPPY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BZIP2'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEFLATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LZO'),
                            new \PHPStan\Type\Constant\ConstantStringType('BROTLI'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZSTD'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZLIB'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                            new \PHPStan\Type\Constant\ConstantStringType('GLUEPARQUET'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVRO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORC'),
                            new \PHPStan\Type\Constant\ConstantStringType('XML'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLEAUHYPER'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Csv'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overwrite'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Location'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TempDirectory'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlueConnectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseOutputMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TempDirectory'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('NEW_TABLE'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetStatisticsConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileColumns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnStatisticsConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityDetectorConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IncludedStatistics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overrides'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Regex'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Selectors'),
                            new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Regex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IncludedStatistics'),
                                new \PHPStan\Type\Constant\ConstantStringType('Overrides'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ])),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedStatistics'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RulesetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValidationMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('CHECK_ALL'),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecipeVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_DATASET'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_ROWS'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeJobRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attempt'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletedOn'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionTime'),
                new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                new \PHPStan\Type\Constant\ConstantStringType('ProfileConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('ValidationConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('RunId'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('LogSubscription'),
                new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                new \PHPStan\Type\Constant\ConstantStringType('DataCatalogOutputs'),
                new \PHPStan\Type\Constant\ConstantStringType('DatabaseOutputs'),
                new \PHPStan\Type\Constant\ConstantStringType('RecipeReference'),
                new \PHPStan\Type\Constant\ConstantStringType('StartedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('StartedOn'),
                new \PHPStan\Type\Constant\ConstantStringType('JobSample'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetStatisticsConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProfileColumns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnStatisticsConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityDetectorConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IncludedStatistics'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overrides'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Regex'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Selectors'),
                            new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Regex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IncludedStatistics'),
                                new \PHPStan\Type\Constant\ConstantStringType('Overrides'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ])),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedStatistics'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RulesetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValidationMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('CHECK_ALL'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMEOUT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('Format'),
                        new \PHPStan\Type\Constant\ConstantStringType('PartitionColumns'),
                        new \PHPStan\Type\Constant\ConstantStringType('Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overwrite'),
                        new \PHPStan\Type\Constant\ConstantStringType('FormatOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxOutputFiles'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                            new \PHPStan\Type\Constant\ConstantStringType('LZ4'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNAPPY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BZIP2'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEFLATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LZO'),
                            new \PHPStan\Type\Constant\ConstantStringType('BROTLI'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZSTD'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZLIB'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                            new \PHPStan\Type\Constant\ConstantStringType('GLUEPARQUET'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVRO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORC'),
                            new \PHPStan\Type\Constant\ConstantStringType('XML'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLEAUHYPER'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Csv'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overwrite'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Location'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TempDirectory'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlueConnectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseOutputMode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TempDirectory'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('NEW_TABLE'),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecipeVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_DATASET'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_ROWS'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('RecipeName'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Sample'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('SessionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('OpenedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('OpenDate'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FIRST_N'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAST_N'),
                        new \PHPStan\Type\Constant\ConstantStringType('RANDOM'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ASSIGNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('RECYCLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROTATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeRecipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('ProjectName'),
                new \PHPStan\Type\Constant\ConstantStringType('PublishedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('PublishedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Steps'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('RecipeVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConditionExpressions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetColumn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRuleset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubstitutionMap'),
                        new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColumnSelectors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN_OR_EQUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN_OR_EQUAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('GREATER_THAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('LESS_THAN'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PERCENTAGE'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Regex'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('JobNames'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CronExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDatasets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Datasets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Format'),
                        new \PHPStan\Type\Constant\ConstantStringType('FormatOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Input'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('PathOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXCEL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORC'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Json'),
                            new \PHPStan\Type\Constant\ConstantStringType('Excel'),
                            new \PHPStan\Type\Constant\ConstantStringType('Csv'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MultiLine'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SheetNames'),
                                new \PHPStan\Type\Constant\ConstantStringType('SheetIndexes'),
                                new \PHPStan\Type\Constant\ConstantStringType('HeaderRow'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\IntegerType(),
                                ])),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                new \PHPStan\Type\Constant\ConstantStringType('HeaderRow'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3InputDefinition'),
                            new \PHPStan\Type\Constant\ConstantStringType('DataCatalogInputDefinition'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseInputDefinition'),
                            new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                                new \PHPStan\Type\Constant\ConstantStringType('TempDirectory'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GlueConnectionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseTableName'),
                                new \PHPStan\Type\Constant\ConstantStringType('TempDirectory'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATA-CATALOG'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATABASE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDateCondition'),
                            new \PHPStan\Type\Constant\ConstantStringType('FilesLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValuesMap'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MaxFiles'),
                                new \PHPStan\Type\Constant\ConstantStringType('OrderedBy'),
                                new \PHPStan\Type\Constant\ConstantStringType('Order'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantStringType('LAST_MODIFIED_DATE'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DESCENDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASCENDING'),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatetimeOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('CreateColumn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Datetime'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Number'),
                                    new \PHPStan\Type\Constant\ConstantStringType('String'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TimezoneOffset'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LocaleCode'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ValuesMap'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobRuns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobRuns'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Attempt'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletedOn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunId'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogSubscription'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataCatalogOutputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseOutputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecipeReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartedOn'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobSample'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValidationConfigurations'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMEOUT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Format'),
                                new \PHPStan\Type\Constant\ConstantStringType('PartitionColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                                new \PHPStan\Type\Constant\ConstantStringType('Overwrite'),
                                new \PHPStan\Type\Constant\ConstantStringType('FormatOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxOutputFiles'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LZ4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SNAPPY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BZIP2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFLATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LZO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BROTLI'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZSTD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZLIB'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GLUEPARQUET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AVRO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ORC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('XML'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLEAUHYPER'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Csv'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3Options'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('Overwrite'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TempDirectory'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GlueConnectionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseOutputMode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TempDirectory'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('NEW_TABLE'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecipeVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FULL_DATASET'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_ROWS'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RulesetArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationMode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('CHECK_ALL'),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Jobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogSubscription'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCapacity'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxRetries'),
                        new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataCatalogOutputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseOutputs'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProjectName'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecipeReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timeout'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobSample'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValidationConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SSE-KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSE-S3'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROFILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RECIPE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLE'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('Format'),
                                new \PHPStan\Type\Constant\ConstantStringType('PartitionColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                                new \PHPStan\Type\Constant\ConstantStringType('Overwrite'),
                                new \PHPStan\Type\Constant\ConstantStringType('FormatOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxOutputFiles'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LZ4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SNAPPY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BZIP2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFLATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LZO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BROTLI'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZSTD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZLIB'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GLUEPARQUET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AVRO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ORC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('XML'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLEAUHYPER'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Csv'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3Options'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('Overwrite'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TempDirectory'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GlueConnectionName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseOutputMode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TempDirectory'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('NEW_TABLE'),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecipeVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FULL_DATASET'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_ROWS'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RulesetArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValidationMode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('CHECK_ALL'),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Projects'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecipeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sample'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpenedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpenDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Size'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FIRST_N'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAST_N'),
                                new \PHPStan\Type\Constant\ConstantStringType('RANDOM'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRecipeVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Recipes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProjectName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PublishedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('PublishedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Steps'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecipeVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConditionExpressions'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetColumn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listRecipes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Recipes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProjectName'),
                        new \PHPStan\Type\Constant\ConstantStringType('PublishedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('PublishedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Steps'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecipeVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConditionExpressions'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TargetColumn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRulesets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rulesets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuleCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSchedules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Schedules'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CronExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function publishRecipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendProjectSessionAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Result'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ActionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function startJobRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RunId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startProjectSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ClientSessionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopJobRun(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RunId'),
            ], [
                new \PHPStan\Type\StringType(),
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
    private function updateDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateProfileJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateProject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRecipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRecipeJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRuleset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSchedule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}