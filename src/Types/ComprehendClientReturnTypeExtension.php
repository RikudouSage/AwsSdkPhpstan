<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ComprehendClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Comprehend\ComprehendClient>
     */
    public function getClass(): string
    {
        return \Aws\Comprehend\ComprehendClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchDetectDominantLanguage',
            'batchDetectEntities',
            'batchDetectKeyPhrases',
            'batchDetectSentiment',
            'batchDetectSyntax',
            'batchDetectTargetedSentiment',
            'classifyDocument',
            'containsPiiEntities',
            'createDataset',
            'createDocumentClassifier',
            'createEndpoint',
            'createEntityRecognizer',
            'createFlywheel',
            'deleteDocumentClassifier',
            'deleteEndpoint',
            'deleteEntityRecognizer',
            'deleteFlywheel',
            'deleteResourcePolicy',
            'describeDataset',
            'describeDocumentClassificationJob',
            'describeDocumentClassifier',
            'describeDominantLanguageDetectionJob',
            'describeEndpoint',
            'describeEntitiesDetectionJob',
            'describeEntityRecognizer',
            'describeEventsDetectionJob',
            'describeFlywheel',
            'describeFlywheelIteration',
            'describeKeyPhrasesDetectionJob',
            'describePiiEntitiesDetectionJob',
            'describeResourcePolicy',
            'describeSentimentDetectionJob',
            'describeTargetedSentimentDetectionJob',
            'describeTopicsDetectionJob',
            'detectDominantLanguage',
            'detectEntities',
            'detectKeyPhrases',
            'detectPiiEntities',
            'detectSentiment',
            'detectSyntax',
            'detectTargetedSentiment',
            'detectToxicContent',
            'importModel',
            'listDatasets',
            'listDocumentClassificationJobs',
            'listDocumentClassifierSummaries',
            'listDocumentClassifiers',
            'listDominantLanguageDetectionJobs',
            'listEndpoints',
            'listEntitiesDetectionJobs',
            'listEntityRecognizerSummaries',
            'listEntityRecognizers',
            'listEventsDetectionJobs',
            'listFlywheelIterationHistory',
            'listFlywheels',
            'listKeyPhrasesDetectionJobs',
            'listPiiEntitiesDetectionJobs',
            'listSentimentDetectionJobs',
            'listTagsForResource',
            'listTargetedSentimentDetectionJobs',
            'listTopicsDetectionJobs',
            'putResourcePolicy',
            'startDocumentClassificationJob',
            'startDominantLanguageDetectionJob',
            'startEntitiesDetectionJob',
            'startEventsDetectionJob',
            'startFlywheelIteration',
            'startKeyPhrasesDetectionJob',
            'startPiiEntitiesDetectionJob',
            'startSentimentDetectionJob',
            'startTargetedSentimentDetectionJob',
            'startTopicsDetectionJob',
            'stopDominantLanguageDetectionJob',
            'stopEntitiesDetectionJob',
            'stopEventsDetectionJob',
            'stopKeyPhrasesDetectionJob',
            'stopPiiEntitiesDetectionJob',
            'stopSentimentDetectionJob',
            'stopTargetedSentimentDetectionJob',
            'stopTrainingDocumentClassifier',
            'stopTrainingEntityRecognizer',
            'tagResource',
            'untagResource',
            'updateEndpoint',
            'updateFlywheel',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchDetectDominantLanguage' => $this->batchDetectDominantLanguage(),
            'batchDetectEntities' => $this->batchDetectEntities(),
            'batchDetectKeyPhrases' => $this->batchDetectKeyPhrases(),
            'batchDetectSentiment' => $this->batchDetectSentiment(),
            'batchDetectSyntax' => $this->batchDetectSyntax(),
            'batchDetectTargetedSentiment' => $this->batchDetectTargetedSentiment(),
            'classifyDocument' => $this->classifyDocument(),
            'containsPiiEntities' => $this->containsPiiEntities(),
            'createDataset' => $this->createDataset(),
            'createDocumentClassifier' => $this->createDocumentClassifier(),
            'createEndpoint' => $this->createEndpoint(),
            'createEntityRecognizer' => $this->createEntityRecognizer(),
            'createFlywheel' => $this->createFlywheel(),
            'deleteDocumentClassifier' => $this->deleteDocumentClassifier(),
            'deleteEndpoint' => $this->deleteEndpoint(),
            'deleteEntityRecognizer' => $this->deleteEntityRecognizer(),
            'deleteFlywheel' => $this->deleteFlywheel(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'describeDataset' => $this->describeDataset(),
            'describeDocumentClassificationJob' => $this->describeDocumentClassificationJob(),
            'describeDocumentClassifier' => $this->describeDocumentClassifier(),
            'describeDominantLanguageDetectionJob' => $this->describeDominantLanguageDetectionJob(),
            'describeEndpoint' => $this->describeEndpoint(),
            'describeEntitiesDetectionJob' => $this->describeEntitiesDetectionJob(),
            'describeEntityRecognizer' => $this->describeEntityRecognizer(),
            'describeEventsDetectionJob' => $this->describeEventsDetectionJob(),
            'describeFlywheel' => $this->describeFlywheel(),
            'describeFlywheelIteration' => $this->describeFlywheelIteration(),
            'describeKeyPhrasesDetectionJob' => $this->describeKeyPhrasesDetectionJob(),
            'describePiiEntitiesDetectionJob' => $this->describePiiEntitiesDetectionJob(),
            'describeResourcePolicy' => $this->describeResourcePolicy(),
            'describeSentimentDetectionJob' => $this->describeSentimentDetectionJob(),
            'describeTargetedSentimentDetectionJob' => $this->describeTargetedSentimentDetectionJob(),
            'describeTopicsDetectionJob' => $this->describeTopicsDetectionJob(),
            'detectDominantLanguage' => $this->detectDominantLanguage(),
            'detectEntities' => $this->detectEntities(),
            'detectKeyPhrases' => $this->detectKeyPhrases(),
            'detectPiiEntities' => $this->detectPiiEntities(),
            'detectSentiment' => $this->detectSentiment(),
            'detectSyntax' => $this->detectSyntax(),
            'detectTargetedSentiment' => $this->detectTargetedSentiment(),
            'detectToxicContent' => $this->detectToxicContent(),
            'importModel' => $this->importModel(),
            'listDatasets' => $this->listDatasets(),
            'listDocumentClassificationJobs' => $this->listDocumentClassificationJobs(),
            'listDocumentClassifierSummaries' => $this->listDocumentClassifierSummaries(),
            'listDocumentClassifiers' => $this->listDocumentClassifiers(),
            'listDominantLanguageDetectionJobs' => $this->listDominantLanguageDetectionJobs(),
            'listEndpoints' => $this->listEndpoints(),
            'listEntitiesDetectionJobs' => $this->listEntitiesDetectionJobs(),
            'listEntityRecognizerSummaries' => $this->listEntityRecognizerSummaries(),
            'listEntityRecognizers' => $this->listEntityRecognizers(),
            'listEventsDetectionJobs' => $this->listEventsDetectionJobs(),
            'listFlywheelIterationHistory' => $this->listFlywheelIterationHistory(),
            'listFlywheels' => $this->listFlywheels(),
            'listKeyPhrasesDetectionJobs' => $this->listKeyPhrasesDetectionJobs(),
            'listPiiEntitiesDetectionJobs' => $this->listPiiEntitiesDetectionJobs(),
            'listSentimentDetectionJobs' => $this->listSentimentDetectionJobs(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTargetedSentimentDetectionJobs' => $this->listTargetedSentimentDetectionJobs(),
            'listTopicsDetectionJobs' => $this->listTopicsDetectionJobs(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'startDocumentClassificationJob' => $this->startDocumentClassificationJob(),
            'startDominantLanguageDetectionJob' => $this->startDominantLanguageDetectionJob(),
            'startEntitiesDetectionJob' => $this->startEntitiesDetectionJob(),
            'startEventsDetectionJob' => $this->startEventsDetectionJob(),
            'startFlywheelIteration' => $this->startFlywheelIteration(),
            'startKeyPhrasesDetectionJob' => $this->startKeyPhrasesDetectionJob(),
            'startPiiEntitiesDetectionJob' => $this->startPiiEntitiesDetectionJob(),
            'startSentimentDetectionJob' => $this->startSentimentDetectionJob(),
            'startTargetedSentimentDetectionJob' => $this->startTargetedSentimentDetectionJob(),
            'startTopicsDetectionJob' => $this->startTopicsDetectionJob(),
            'stopDominantLanguageDetectionJob' => $this->stopDominantLanguageDetectionJob(),
            'stopEntitiesDetectionJob' => $this->stopEntitiesDetectionJob(),
            'stopEventsDetectionJob' => $this->stopEventsDetectionJob(),
            'stopKeyPhrasesDetectionJob' => $this->stopKeyPhrasesDetectionJob(),
            'stopPiiEntitiesDetectionJob' => $this->stopPiiEntitiesDetectionJob(),
            'stopSentimentDetectionJob' => $this->stopSentimentDetectionJob(),
            'stopTargetedSentimentDetectionJob' => $this->stopTargetedSentimentDetectionJob(),
            'stopTrainingDocumentClassifier' => $this->stopTrainingDocumentClassifier(),
            'stopTrainingEntityRecognizer' => $this->stopTrainingEntityRecognizer(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateEndpoint' => $this->updateEndpoint(),
            'updateFlywheel' => $this->updateFlywheel(),
        };
    }
    private function batchDetectDominantLanguage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResultList'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Index'),
                    new \PHPStan\Type\Constant\ConstantStringType('Languages'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Index'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchDetectEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResultList'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Index'),
                    new \PHPStan\Type\Constant\ConstantStringType('Entities'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('BlockReferences'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PERSON'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMMERCIAL_ITEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUANTITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BlockId'),
                            new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChildBlocks'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ChildBlockId'),
                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Index'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchDetectKeyPhrases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResultList'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Index'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyPhrases'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Index'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchDetectSentiment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResultList'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Index'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sentiment'),
                    new \PHPStan\Type\Constant\ConstantStringType('SentimentScore'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('POSITIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEUTRAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MIXED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Positive'),
                        new \PHPStan\Type\Constant\ConstantStringType('Negative'),
                        new \PHPStan\Type\Constant\ConstantStringType('Neutral'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mixed'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Index'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchDetectSyntax(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResultList'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Index'),
                    new \PHPStan\Type\Constant\ConstantStringType('SyntaxTokens'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TokenId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('PartOfSpeech'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                            new \PHPStan\Type\Constant\ConstantStringType('Score'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ADJ'),
                                new \PHPStan\Type\Constant\ConstantStringType('ADP'),
                                new \PHPStan\Type\Constant\ConstantStringType('ADV'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUX'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONJ'),
                                new \PHPStan\Type\Constant\ConstantStringType('CCONJ'),
                                new \PHPStan\Type\Constant\ConstantStringType('DET'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTJ'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOUN'),
                                new \PHPStan\Type\Constant\ConstantStringType('NUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('O'),
                                new \PHPStan\Type\Constant\ConstantStringType('PART'),
                                new \PHPStan\Type\Constant\ConstantStringType('PRON'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROPN'),
                                new \PHPStan\Type\Constant\ConstantStringType('PUNCT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SCONJ'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYM'),
                                new \PHPStan\Type\Constant\ConstantStringType('VERB'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Index'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchDetectTargetedSentiment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResultList'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Index'),
                    new \PHPStan\Type\Constant\ConstantStringType('Entities'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DescriptiveMentionIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mentions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Score'),
                            new \PHPStan\Type\Constant\ConstantStringType('GroupScore'),
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('MentionSentiment'),
                            new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PERSON'),
                                new \PHPStan\Type\Constant\ConstantStringType('LOCATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('FACILITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('BRAND'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMMERCIAL_ITEM'),
                                new \PHPStan\Type\Constant\ConstantStringType('MOVIE'),
                                new \PHPStan\Type\Constant\ConstantStringType('MUSIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOK'),
                                new \PHPStan\Type\Constant\ConstantStringType('SOFTWARE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('PERSONAL_TITLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUANTITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE'),
                                new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Sentiment'),
                                new \PHPStan\Type\Constant\ConstantStringType('SentimentScore'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('POSITIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NEUTRAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MIXED'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Positive'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Negative'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Neutral'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Mixed'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Index'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function classifyDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Classes'),
                new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Score'),
                    new \PHPStan\Type\Constant\ConstantStringType('Page'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Score'),
                    new \PHPStan\Type\Constant\ConstantStringType('Page'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExtractedCharacters'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Page'),
                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Page'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NATIVE_PDF'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCANNED_PDF'),
                        new \PHPStan\Type\Constant\ConstantStringType('MS_WORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT_JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT_JSON'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Page'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_BAD_PAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_PROVISIONED_THROUGHPUT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAGE_CHARACTERS_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAGE_SIZE_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Page'),
                    new \PHPStan\Type\Constant\ConstantStringType('WarnCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('WarnMessage'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INFERENCING_PLAINTEXT_WITH_NATIVE_TRAINED_MODEL'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFERENCING_NATIVE_DOCUMENT_WITH_PLAINTEXT_TRAINED_MODEL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function containsPiiEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Labels'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Score'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BANK_ACCOUNT_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('BANK_ROUTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CVV'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_EXPIRY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATE_TIME'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSPORT_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRIVER_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCESS_KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SECRET_KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAC_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LICENSE_PLATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('VEHICLE_IDENTIFICATION_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_INSURANCE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CA_SOCIAL_INSURANCE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PERMANENT_ACCOUNT_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_NREGA'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNATIONAL_BANK_ACCOUNT_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SWIFT_CODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_HEALTH_SERVICE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CA_HEALTH_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_AADHAAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_VOTER_NUMBER'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function createDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDocumentClassifier(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentClassifierArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createEntityRecognizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EntityRecognizerArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFlywheel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ActiveModelArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteDocumentClassifier(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteEntityRecognizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteFlywheel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetS3Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfDocuments'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeDocumentClassificationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentClassificationJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentClassifierArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeDocumentClassifier(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentClassifierProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentClassifierArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainingStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainingEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClassifierMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINED_WITH_WARNING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('TestS3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('LabelDelimiter'),
                        new \PHPStan\Type\Constant\ConstantStringType('AugmentedManifests'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Documents'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPREHEND_CSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUGMENTED_MANIFEST'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('Split'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('AnnotationDataS3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceDocumentsS3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRAIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT_DOCUMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_DOCUMENT'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT_DOCUMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_DOCUMENT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('TestS3Uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('FlywheelStatsS3Prefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfLabels'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfTrainedDocuments'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfTestDocuments'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationMetrics'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Accuracy'),
                            new \PHPStan\Type\Constant\ConstantStringType('Precision'),
                            new \PHPStan\Type\Constant\ConstantStringType('Recall'),
                            new \PHPStan\Type\Constant\ConstantStringType('F1Score'),
                            new \PHPStan\Type\Constant\ConstantStringType('MicroPrecision'),
                            new \PHPStan\Type\Constant\ConstantStringType('MicroRecall'),
                            new \PHPStan\Type\Constant\ConstantStringType('MicroF1Score'),
                            new \PHPStan\Type\Constant\ConstantStringType('HammingLoss'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI_CLASS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI_LABEL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeDominantLanguageDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DominantLanguageDetectionJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredInferenceUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentInferenceUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredDataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeEntitiesDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EntitiesDetectionJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityRecognizerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeEntityRecognizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EntityRecognizerProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EntityRecognizerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainingStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainingEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecognizerMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINED_WITH_WARNING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Documents'),
                        new \PHPStan\Type\Constant\ConstantStringType('Annotations'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityList'),
                        new \PHPStan\Type\Constant\ConstantStringType('AugmentedManifests'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPREHEND_CSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUGMENTED_MANIFEST'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('TestS3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('TestS3Uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('Split'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('AnnotationDataS3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceDocumentsS3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRAIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT_DOCUMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_DOCUMENT'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfTrainedDocuments'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfTestDocuments'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Precision'),
                            new \PHPStan\Type\Constant\ConstantStringType('Recall'),
                            new \PHPStan\Type\Constant\ConstantStringType('F1Score'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('EvaluationMetrics'),
                            new \PHPStan\Type\Constant\ConstantStringType('NumberOfTrainMentions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Precision'),
                                new \PHPStan\Type\Constant\ConstantStringType('Recall'),
                                new \PHPStan\Type\Constant\ConstantStringType('F1Score'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FlywheelStatsS3Prefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeEventsDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventsDetectionJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetEventTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeFlywheel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlywheelProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataLakeS3Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataSecurityConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestFlywheelIteration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentClassificationConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityRecognitionConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('en'),
                            new \PHPStan\Type\Constant\ConstantStringType('es'),
                            new \PHPStan\Type\Constant\ConstantStringType('fr'),
                            new \PHPStan\Type\Constant\ConstantStringType('de'),
                            new \PHPStan\Type\Constant\ConstantStringType('it'),
                            new \PHPStan\Type\Constant\ConstantStringType('pt'),
                            new \PHPStan\Type\Constant\ConstantStringType('ar'),
                            new \PHPStan\Type\Constant\ConstantStringType('hi'),
                            new \PHPStan\Type\Constant\ConstantStringType('ja'),
                            new \PHPStan\Type\Constant\ConstantStringType('ko'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MULTI_CLASS'),
                                new \PHPStan\Type\Constant\ConstantStringType('MULTI_LABEL'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ModelKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataLakeKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_CLASSIFIER'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTITY_RECOGNIZER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeFlywheelIteration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlywheelIterationProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelIterationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluatedModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluatedModelMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainedModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainedModelMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationManifestS3Prefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVALUATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AverageF1Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('AveragePrecision'),
                        new \PHPStan\Type\Constant\ConstantStringType('AverageRecall'),
                        new \PHPStan\Type\Constant\ConstantStringType('AverageAccuracy'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AverageF1Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('AveragePrecision'),
                        new \PHPStan\Type\Constant\ConstantStringType('AverageRecall'),
                        new \PHPStan\Type\Constant\ConstantStringType('AverageAccuracy'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeKeyPhrasesDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyPhrasesDetectionJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describePiiEntitiesDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PiiEntitiesDetectionJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedactionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PiiEntityTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaskMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaskCharacter'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BANK_ACCOUNT_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('BANK_ROUTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CVV'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_EXPIRY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE_TIME'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSPORT_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DRIVER_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCESS_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_SECRET_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAC_ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('LICENSE_PLATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VEHICLE_IDENTIFICATION_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_INSURANCE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('CA_SOCIAL_INSURANCE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PERMANENT_ACCOUNT_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_NREGA'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNATIONAL_BANK_ACCOUNT_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SWIFT_CODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_HEALTH_SERVICE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('CA_HEALTH_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_AADHAAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_VOTER_NUMBER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MASK'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPLACE_WITH_PII_ENTITY_TYPE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ONLY_REDACTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONLY_OFFSETS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourcePolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('PolicyRevisionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSentimentDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SentimentDetectionJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeTargetedSentimentDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TargetedSentimentDetectionJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeTopicsDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TopicsDetectionJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfTopics'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function detectDominantLanguage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Languages'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Score'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function detectEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entities'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                new \PHPStan\Type\Constant\ConstantStringType('Blocks'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Score'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('BlockReferences'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PERSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOCATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMMERCIAL_ITEM'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUANTITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BlockId'),
                        new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChildBlocks'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ChildBlockId'),
                            new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExtractedCharacters'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Page'),
                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Page'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NATIVE_PDF'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCANNED_PDF'),
                        new \PHPStan\Type\Constant\ConstantStringType('MS_WORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT_JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT_JSON'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('BlockType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    new \PHPStan\Type\Constant\ConstantStringType('Page'),
                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                    new \PHPStan\Type\Constant\ConstantStringType('Relationships'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORD'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('X'),
                            new \PHPStan\Type\Constant\ConstantStringType('Y'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Ids'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Page'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_BAD_PAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_PROVISIONED_THROUGHPUT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAGE_CHARACTERS_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAGE_SIZE_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function detectKeyPhrases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyPhrases'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Score'),
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function detectPiiEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entities'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Score'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BANK_ACCOUNT_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('BANK_ROUTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CVV'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_EXPIRY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATE_TIME'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSPORT_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRIVER_ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCESS_KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SECRET_KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAC_ADDRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('LICENSE_PLATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('VEHICLE_IDENTIFICATION_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_INSURANCE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CA_SOCIAL_INSURANCE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PERMANENT_ACCOUNT_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_NREGA'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNATIONAL_BANK_ACCOUNT_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SWIFT_CODE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_HEALTH_SERVICE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CA_HEALTH_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_AADHAAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_VOTER_NUMBER'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function detectSentiment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Sentiment'),
                new \PHPStan\Type\Constant\ConstantStringType('SentimentScore'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('POSITIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NEUTRAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('MIXED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Positive'),
                    new \PHPStan\Type\Constant\ConstantStringType('Negative'),
                    new \PHPStan\Type\Constant\ConstantStringType('Neutral'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mixed'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function detectSyntax(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SyntaxTokens'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TokenId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartOfSpeech'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ADJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADP'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADV'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUX'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('CCONJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('DET'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOUN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NUM'),
                            new \PHPStan\Type\Constant\ConstantStringType('O'),
                            new \PHPStan\Type\Constant\ConstantStringType('PART'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRON'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROPN'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUNCT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCONJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYM'),
                            new \PHPStan\Type\Constant\ConstantStringType('VERB'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function detectTargetedSentiment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entities'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DescriptiveMentionIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mentions'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('GroupScore'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('MentionSentiment'),
                        new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PERSON'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FACILITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BRAND'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMMERCIAL_ITEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('MOVIE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MUSIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SOFTWARE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('PERSONAL_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUANTITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTRIBUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OTHER'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Sentiment'),
                            new \PHPStan\Type\Constant\ConstantStringType('SentimentScore'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('POSITIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NEUTRAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MIXED'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Positive'),
                                new \PHPStan\Type\Constant\ConstantStringType('Negative'),
                                new \PHPStan\Type\Constant\ConstantStringType('Neutral'),
                                new \PHPStan\Type\Constant\ConstantStringType('Mixed'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function detectToxicContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResultList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                    new \PHPStan\Type\Constant\ConstantStringType('Toxicity'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GRAPHIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('HARASSMENT_OR_ABUSE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HATE_SPEECH'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROFANITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEXUAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIOLENCE_OR_THREAT'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
    private function importModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDatasets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatasetPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatasetS3Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfDocuments'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRAIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDocumentClassificationJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentClassificationJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentClassifierArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDocumentClassifierSummaries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentClassifierSummariesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentClassifierName'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionCreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINED_WITH_WARNING'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDocumentClassifiers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentClassifierPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentClassifierArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainingStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainingEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClassifierMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINED_WITH_WARNING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('TestS3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('LabelDelimiter'),
                        new \PHPStan\Type\Constant\ConstantStringType('AugmentedManifests'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Documents'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPREHEND_CSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUGMENTED_MANIFEST'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('Split'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('AnnotationDataS3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceDocumentsS3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRAIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT_DOCUMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_DOCUMENT'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT_DOCUMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_DOCUMENT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('TestS3Uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('FlywheelStatsS3Prefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfLabels'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfTrainedDocuments'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfTestDocuments'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationMetrics'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Accuracy'),
                            new \PHPStan\Type\Constant\ConstantStringType('Precision'),
                            new \PHPStan\Type\Constant\ConstantStringType('Recall'),
                            new \PHPStan\Type\Constant\ConstantStringType('F1Score'),
                            new \PHPStan\Type\Constant\ConstantStringType('MicroPrecision'),
                            new \PHPStan\Type\Constant\ConstantStringType('MicroRecall'),
                            new \PHPStan\Type\Constant\ConstantStringType('MicroF1Score'),
                            new \PHPStan\Type\Constant\ConstantStringType('HammingLoss'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI_CLASS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MULTI_LABEL'),
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
    private function listDominantLanguageDetectionJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DominantLanguageDetectionJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EndpointPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredInferenceUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentInferenceUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredDataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEntitiesDetectionJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EntitiesDetectionJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityRecognizerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEntityRecognizerSummaries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EntityRecognizerSummariesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecognizerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionCreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINED_WITH_WARNING'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEntityRecognizers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EntityRecognizerPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EntityRecognizerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainingStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainingEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecognizerMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINED_WITH_WARNING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Documents'),
                        new \PHPStan\Type\Constant\ConstantStringType('Annotations'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityList'),
                        new \PHPStan\Type\Constant\ConstantStringType('AugmentedManifests'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPREHEND_CSV'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUGMENTED_MANIFEST'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('TestS3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('TestS3Uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('Split'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttributeNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('AnnotationDataS3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceDocumentsS3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRAIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT_DOCUMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_DOCUMENT'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfTrainedDocuments'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfTestDocuments'),
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationMetrics'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Precision'),
                            new \PHPStan\Type\Constant\ConstantStringType('Recall'),
                            new \PHPStan\Type\Constant\ConstantStringType('F1Score'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('EvaluationMetrics'),
                            new \PHPStan\Type\Constant\ConstantStringType('NumberOfTrainMentions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Precision'),
                                new \PHPStan\Type\Constant\ConstantStringType('Recall'),
                                new \PHPStan\Type\Constant\ConstantStringType('F1Score'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FlywheelStatsS3Prefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEventsDetectionJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventsDetectionJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetEventTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFlywheelIterationHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlywheelIterationPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelIterationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluatedModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluatedModelMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainedModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrainedModelMetrics'),
                    new \PHPStan\Type\Constant\ConstantStringType('EvaluationManifestS3Prefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRAINING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EVALUATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AverageF1Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('AveragePrecision'),
                        new \PHPStan\Type\Constant\ConstantStringType('AverageRecall'),
                        new \PHPStan\Type\Constant\ConstantStringType('AverageAccuracy'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AverageF1Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('AveragePrecision'),
                        new \PHPStan\Type\Constant\ConstantStringType('AverageRecall'),
                        new \PHPStan\Type\Constant\ConstantStringType('AverageAccuracy'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFlywheels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlywheelSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataLakeS3Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestFlywheelIteration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_CLASSIFIER'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTITY_RECOGNIZER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKeyPhrasesDetectionJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyPhrasesDetectionJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPiiEntitiesDetectionJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PiiEntitiesDetectionJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedactionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PiiEntityTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaskMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaskCharacter'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BANK_ACCOUNT_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('BANK_ROUTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_CVV'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREDIT_DEBIT_EXPIRY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE_TIME'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSPORT_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DRIVER_ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('PASSWORD'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCESS_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_SECRET_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('IP_ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAC_ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('LICENSE_PLATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VEHICLE_IDENTIFICATION_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_INSURANCE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('CA_SOCIAL_INSURANCE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PERMANENT_ACCOUNT_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_NREGA'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNATIONAL_BANK_ACCOUNT_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SWIFT_CODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UK_NATIONAL_HEALTH_SERVICE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('CA_HEALTH_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_AADHAAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_VOTER_NUMBER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MASK'),
                            new \PHPStan\Type\Constant\ConstantStringType('REPLACE_WITH_PII_ENTITY_TYPE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ONLY_REDACTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONLY_OFFSETS'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSentimentDetectionJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SentimentDetectionJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
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
    private function listTargetedSentimentDetectionJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TargetedSentimentDetectionJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('it'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ar'),
                        new \PHPStan\Type\Constant\ConstantStringType('hi'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTopicsDetectionJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TopicsDetectionJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfTopics'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentReaderConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_FILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONE_DOC_PER_LINE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadAction'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentReadMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_DETECT_DOCUMENT_TEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXTRACT_ANALYZE_DOCUMENT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_DEFAULT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORCE_DOCUMENT_READ_ACTION'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyRevisionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startDocumentClassificationJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentClassifierArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startDominantLanguageDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function startEntitiesDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('EntityRecognizerArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startEventsDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function startFlywheelIteration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FlywheelIterationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startKeyPhrasesDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function startPiiEntitiesDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function startSentimentDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function startTargetedSentimentDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function startTopicsDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function stopDominantLanguageDetectionJob(): ?\PHPStan\Type\Type
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
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function stopEntitiesDetectionJob(): ?\PHPStan\Type\Type
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
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function stopEventsDetectionJob(): ?\PHPStan\Type\Type
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
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function stopKeyPhrasesDetectionJob(): ?\PHPStan\Type\Type
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
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function stopPiiEntitiesDetectionJob(): ?\PHPStan\Type\Type
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
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function stopSentimentDetectionJob(): ?\PHPStan\Type\Type
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
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function stopTargetedSentimentDetectionJob(): ?\PHPStan\Type\Type
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
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
            ]),
        ]);
    }
    private function stopTrainingDocumentClassifier(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopTrainingEntityRecognizer(): ?\PHPStan\Type\Type
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
    private function updateEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DesiredModelArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateFlywheel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlywheelProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlywheelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataLakeS3Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataSecurityConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestFlywheelIteration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentClassificationConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityRecognitionConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('en'),
                            new \PHPStan\Type\Constant\ConstantStringType('es'),
                            new \PHPStan\Type\Constant\ConstantStringType('fr'),
                            new \PHPStan\Type\Constant\ConstantStringType('de'),
                            new \PHPStan\Type\Constant\ConstantStringType('it'),
                            new \PHPStan\Type\Constant\ConstantStringType('pt'),
                            new \PHPStan\Type\Constant\ConstantStringType('ar'),
                            new \PHPStan\Type\Constant\ConstantStringType('hi'),
                            new \PHPStan\Type\Constant\ConstantStringType('ja'),
                            new \PHPStan\Type\Constant\ConstantStringType('ko'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh-TW'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MULTI_CLASS'),
                                new \PHPStan\Type\Constant\ConstantStringType('MULTI_LABEL'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ModelKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataLakeKmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_CLASSIFIER'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTITY_RECOGNIZER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}