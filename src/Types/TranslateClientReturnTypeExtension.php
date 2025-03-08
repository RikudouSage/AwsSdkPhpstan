<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class TranslateClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Translate\TranslateClient>
     */
    public function getClass(): string
    {
        return \Aws\Translate\TranslateClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createParallelData',
            'deleteParallelData',
            'deleteTerminology',
            'describeTextTranslationJob',
            'getParallelData',
            'getTerminology',
            'importTerminology',
            'listLanguages',
            'listParallelData',
            'listTagsForResource',
            'listTerminologies',
            'listTextTranslationJobs',
            'startTextTranslationJob',
            'stopTextTranslationJob',
            'tagResource',
            'translateDocument',
            'translateText',
            'untagResource',
            'updateParallelData',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createParallelData' => $this->createParallelData(),
            'deleteParallelData' => $this->deleteParallelData(),
            'deleteTerminology' => $this->deleteTerminology(),
            'describeTextTranslationJob' => $this->describeTextTranslationJob(),
            'getParallelData' => $this->getParallelData(),
            'getTerminology' => $this->getTerminology(),
            'importTerminology' => $this->importTerminology(),
            'listLanguages' => $this->listLanguages(),
            'listParallelData' => $this->listParallelData(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTerminologies' => $this->listTerminologies(),
            'listTextTranslationJobs' => $this->listTextTranslationJobs(),
            'startTextTranslationJob' => $this->startTextTranslationJob(),
            'stopTextTranslationJob' => $this->stopTextTranslationJob(),
            'tagResource' => $this->tagResource(),
            'translateDocument' => $this->translateDocument(),
            'translateText' => $this->translateText(),
            'untagResource' => $this->untagResource(),
            'updateParallelData' => $this->updateParallelData(),
        };
    }
    private function createParallelData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function deleteParallelData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function deleteTerminology(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeTextTranslationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TextTranslationJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLanguageCodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('TerminologyNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParallelDataNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TranslatedDocumentsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentsWithErrorsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputDocumentsCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Formality'),
                        new \PHPStan\Type\Constant\ConstantStringType('Profanity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Brevity'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FORMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFORMAL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('MASK'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getParallelData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ParallelDataProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('DataLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('AuxiliaryDataLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestUpdateAttemptAuxiliaryDataLocation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLanguageCodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParallelDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportedDataSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportedRecordCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailedRecordCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('SkippedRecordCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestUpdateAttemptStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestUpdateAttemptAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('TMX'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getTerminology(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TerminologyProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('TerminologyDataLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('AuxiliaryDataLocation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLanguageCodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('SizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('TermCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Directionality'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SkippedTermCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNI'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                        new \PHPStan\Type\Constant\ConstantStringType('TMX'),
                        new \PHPStan\Type\Constant\ConstantStringType('TSV'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function importTerminology(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TerminologyProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('AuxiliaryDataLocation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLanguageCodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('SizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('TermCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Directionality'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SkippedTermCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNI'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                        new \PHPStan\Type\Constant\ConstantStringType('TMX'),
                        new \PHPStan\Type\Constant\ConstantStringType('TSV'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RepositoryType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listLanguages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Languages'),
                new \PHPStan\Type\Constant\ConstantStringType('DisplayLanguageCode'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('de'),
                    new \PHPStan\Type\Constant\ConstantStringType('en'),
                    new \PHPStan\Type\Constant\ConstantStringType('es'),
                    new \PHPStan\Type\Constant\ConstantStringType('fr'),
                    new \PHPStan\Type\Constant\ConstantStringType('it'),
                    new \PHPStan\Type\Constant\ConstantStringType('ja'),
                    new \PHPStan\Type\Constant\ConstantStringType('ko'),
                    new \PHPStan\Type\Constant\ConstantStringType('pt'),
                    new \PHPStan\Type\Constant\ConstantStringType('zh'),
                    new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listParallelData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ParallelDataPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLanguageCodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParallelDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportedDataSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportedRecordCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailedRecordCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('SkippedRecordCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestUpdateAttemptStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestUpdateAttemptAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('TMX'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function listTerminologies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TerminologyPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLanguageCodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('SizeBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('TermCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Directionality'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SkippedTermCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNI'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                        new \PHPStan\Type\Constant\ConstantStringType('TMX'),
                        new \PHPStan\Type\Constant\ConstantStringType('TSV'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTextTranslationJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TextTranslationJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetLanguageCodes'),
                    new \PHPStan\Type\Constant\ConstantStringType('TerminologyNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParallelDataNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TranslatedDocumentsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentsWithErrorsCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputDocumentsCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Formality'),
                        new \PHPStan\Type\Constant\ConstantStringType('Profanity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Brevity'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FORMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFORMAL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('MASK'),
                        new \PHPStan\Type\Constant\ConstantStringType('ON'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startTextTranslationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function stopTextTranslationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function translateDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TranslatedDocument'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLanguageCode'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetLanguageCode'),
                new \PHPStan\Type\Constant\ConstantStringType('AppliedTerminologies'),
                new \PHPStan\Type\Constant\ConstantStringType('AppliedSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceText'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetText'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Formality'),
                    new \PHPStan\Type\Constant\ConstantStringType('Profanity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Brevity'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FORMAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFORMAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('MASK'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON'),
                ]),
            ]),
        ]);
    }
    private function translateText(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TranslatedText'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLanguageCode'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetLanguageCode'),
                new \PHPStan\Type\Constant\ConstantStringType('AppliedTerminologies'),
                new \PHPStan\Type\Constant\ConstantStringType('AppliedSettings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Terms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SourceText'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetText'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Formality'),
                    new \PHPStan\Type\Constant\ConstantStringType('Profanity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Brevity'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FORMAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFORMAL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('MASK'),
                    new \PHPStan\Type\Constant\ConstantStringType('ON'),
                ]),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateParallelData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestUpdateAttemptStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestUpdateAttemptAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
}