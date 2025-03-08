<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class LexModelBuildingServiceClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\LexModelBuildingService\LexModelBuildingServiceClient>
     */
    public function getClass(): string
    {
        return \Aws\LexModelBuildingService\LexModelBuildingServiceClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createBotVersion',
            'createIntentVersion',
            'createSlotTypeVersion',
            'deleteBot',
            'deleteBotAlias',
            'deleteBotChannelAssociation',
            'deleteBotVersion',
            'deleteIntent',
            'deleteIntentVersion',
            'deleteSlotType',
            'deleteSlotTypeVersion',
            'deleteUtterances',
            'getBot',
            'getBotAlias',
            'getBotAliases',
            'getBotChannelAssociation',
            'getBotChannelAssociations',
            'getBotVersions',
            'getBots',
            'getBuiltinIntent',
            'getBuiltinIntents',
            'getBuiltinSlotTypes',
            'getExport',
            'getImport',
            'getIntent',
            'getIntentVersions',
            'getIntents',
            'getMigration',
            'getMigrations',
            'getSlotType',
            'getSlotTypeVersions',
            'getSlotTypes',
            'getUtterancesView',
            'listTagsForResource',
            'putBot',
            'putBotAlias',
            'putIntent',
            'putSlotType',
            'startImport',
            'startMigration',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createBotVersion' => $this->createBotVersion(),
            'createIntentVersion' => $this->createIntentVersion(),
            'createSlotTypeVersion' => $this->createSlotTypeVersion(),
            'deleteBot' => $this->deleteBot(),
            'deleteBotAlias' => $this->deleteBotAlias(),
            'deleteBotChannelAssociation' => $this->deleteBotChannelAssociation(),
            'deleteBotVersion' => $this->deleteBotVersion(),
            'deleteIntent' => $this->deleteIntent(),
            'deleteIntentVersion' => $this->deleteIntentVersion(),
            'deleteSlotType' => $this->deleteSlotType(),
            'deleteSlotTypeVersion' => $this->deleteSlotTypeVersion(),
            'deleteUtterances' => $this->deleteUtterances(),
            'getBot' => $this->getBot(),
            'getBotAlias' => $this->getBotAlias(),
            'getBotAliases' => $this->getBotAliases(),
            'getBotChannelAssociation' => $this->getBotChannelAssociation(),
            'getBotChannelAssociations' => $this->getBotChannelAssociations(),
            'getBotVersions' => $this->getBotVersions(),
            'getBots' => $this->getBots(),
            'getBuiltinIntent' => $this->getBuiltinIntent(),
            'getBuiltinIntents' => $this->getBuiltinIntents(),
            'getBuiltinSlotTypes' => $this->getBuiltinSlotTypes(),
            'getExport' => $this->getExport(),
            'getImport' => $this->getImport(),
            'getIntent' => $this->getIntent(),
            'getIntentVersions' => $this->getIntentVersions(),
            'getIntents' => $this->getIntents(),
            'getMigration' => $this->getMigration(),
            'getMigrations' => $this->getMigrations(),
            'getSlotType' => $this->getSlotType(),
            'getSlotTypeVersions' => $this->getSlotTypeVersions(),
            'getSlotTypes' => $this->getSlotTypes(),
            'getUtterancesView' => $this->getUtterancesView(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putBot' => $this->putBot(),
            'putBotAlias' => $this->putBotAlias(),
            'putIntent' => $this->putIntent(),
            'putSlotType' => $this->putSlotType(),
            'startImport' => $this->startImport(),
            'startMigration' => $this->startMigration(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function createBotVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('intents'),
                new \PHPStan\Type\Constant\ConstantStringType('clarificationPrompt'),
                new \PHPStan\Type\Constant\ConstantStringType('abortStatement'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('idleSessionTTLInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('voiceId'),
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('locale'),
                new \PHPStan\Type\Constant\ConstantStringType('childDirected'),
                new \PHPStan\Type\Constant\ConstantStringType('enableModelImprovements'),
                new \PHPStan\Type\Constant\ConstantStringType('detectSentiment'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('intentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('intentVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxAttempts'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY_BASIC_TESTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_BUILT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-IN'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-419'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-ES'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ja-JP'),
                    new \PHPStan\Type\Constant\ConstantStringType('ko-KR'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function createIntentVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('slots'),
                new \PHPStan\Type\Constant\ConstantStringType('sampleUtterances'),
                new \PHPStan\Type\Constant\ConstantStringType('confirmationPrompt'),
                new \PHPStan\Type\Constant\ConstantStringType('rejectionStatement'),
                new \PHPStan\Type\Constant\ConstantStringType('followUpPrompt'),
                new \PHPStan\Type\Constant\ConstantStringType('conclusionStatement'),
                new \PHPStan\Type\Constant\ConstantStringType('dialogCodeHook'),
                new \PHPStan\Type\Constant\ConstantStringType('fulfillmentActivity'),
                new \PHPStan\Type\Constant\ConstantStringType('parentIntentSignature'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('kendraConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('inputContexts'),
                new \PHPStan\Type\Constant\ConstantStringType('outputContexts'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('slotConstraint'),
                    new \PHPStan\Type\Constant\ConstantStringType('slotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('slotTypeVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('valueElicitationPrompt'),
                    new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('sampleUtterances'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                    new \PHPStan\Type\Constant\ConstantStringType('obfuscationSetting'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultValueSpec'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Required'),
                        new \PHPStan\Type\Constant\ConstantStringType('Optional'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('messages'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxAttempts'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_OBFUSCATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValueList'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxAttempts'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('prompt'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejectionStatement'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('messages'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxAttempts'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('messages'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('codeHook'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReturnIntent'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeHook'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('messageVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kendraIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('queryFilterString'),
                    new \PHPStan\Type\Constant\ConstantStringType('role'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeToLiveInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('turnsToLive'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createSlotTypeVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('enumerationValues'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('valueSelectionStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('parentSlotTypeSignature'),
                new \PHPStan\Type\Constant\ConstantStringType('slotTypeConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('synonyms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL_VALUE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TOP_RESOLUTION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('regexConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteBot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBotAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBotChannelAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBotVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteIntent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteIntentVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSlotType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSlotTypeVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteUtterances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getBot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('intents'),
                new \PHPStan\Type\Constant\ConstantStringType('enableModelImprovements'),
                new \PHPStan\Type\Constant\ConstantStringType('nluIntentConfidenceThreshold'),
                new \PHPStan\Type\Constant\ConstantStringType('clarificationPrompt'),
                new \PHPStan\Type\Constant\ConstantStringType('abortStatement'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('idleSessionTTLInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('voiceId'),
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('locale'),
                new \PHPStan\Type\Constant\ConstantStringType('childDirected'),
                new \PHPStan\Type\Constant\ConstantStringType('detectSentiment'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('intentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('intentVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxAttempts'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY_BASIC_TESTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_BUILT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-IN'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-419'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-ES'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ja-JP'),
                    new \PHPStan\Type\Constant\ConstantStringType('ko-KR'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getBotAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('botVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('botName'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('conversationLogs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('logSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamRoleArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('logType'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourcePrefix'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AUDIO'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getBotAliases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BotAliases'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('botVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('botName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                    new \PHPStan\Type\Constant\ConstantStringType('conversationLogs'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('logSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('iamRoleArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logType'),
                            new \PHPStan\Type\Constant\ConstantStringType('destination'),
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourcePrefix'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AUDIO'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH_LOGS'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBotChannelAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('botAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('botName'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('botConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Facebook'),
                    new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                    new \PHPStan\Type\Constant\ConstantStringType('Twilio-Sms'),
                    new \PHPStan\Type\Constant\ConstantStringType('Kik'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBotChannelAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('botChannelAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('botAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('botName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('botConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Facebook'),
                        new \PHPStan\Type\Constant\ConstantStringType('Slack'),
                        new \PHPStan\Type\Constant\ConstantStringType('Twilio-Sms'),
                        new \PHPStan\Type\Constant\ConstantStringType('Kik'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBotVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('bots'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_BASIC_TESTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_BUILT'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('bots'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_BASIC_TESTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_BUILT'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBuiltinIntent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('signature'),
                new \PHPStan\Type\Constant\ConstantStringType('supportedLocales'),
                new \PHPStan\Type\Constant\ConstantStringType('slots'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-IN'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-419'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-ES'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ja-JP'),
                    new \PHPStan\Type\Constant\ConstantStringType('ko-KR'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getBuiltinIntents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('intents'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('signature'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedLocales'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-419'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-ES'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                        new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja-JP'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko-KR'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBuiltinSlotTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('slotTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('signature'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedLocales'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-419'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-ES'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                        new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja-JP'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko-KR'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('exportType'),
                new \PHPStan\Type\Constant\ConstantStringType('exportStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('url'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTENT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SLOT_TYPE'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALEXA_SKILLS_KIT'),
                    new \PHPStan\Type\Constant\ConstantStringType('LEX'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getImport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('mergeStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('importId'),
                new \PHPStan\Type\Constant\ConstantStringType('importStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTENT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SLOT_TYPE'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OVERWRITE_LATEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAIL_ON_CONFLICT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getIntent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('slots'),
                new \PHPStan\Type\Constant\ConstantStringType('sampleUtterances'),
                new \PHPStan\Type\Constant\ConstantStringType('confirmationPrompt'),
                new \PHPStan\Type\Constant\ConstantStringType('rejectionStatement'),
                new \PHPStan\Type\Constant\ConstantStringType('followUpPrompt'),
                new \PHPStan\Type\Constant\ConstantStringType('conclusionStatement'),
                new \PHPStan\Type\Constant\ConstantStringType('dialogCodeHook'),
                new \PHPStan\Type\Constant\ConstantStringType('fulfillmentActivity'),
                new \PHPStan\Type\Constant\ConstantStringType('parentIntentSignature'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('kendraConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('inputContexts'),
                new \PHPStan\Type\Constant\ConstantStringType('outputContexts'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('slotConstraint'),
                    new \PHPStan\Type\Constant\ConstantStringType('slotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('slotTypeVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('valueElicitationPrompt'),
                    new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('sampleUtterances'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                    new \PHPStan\Type\Constant\ConstantStringType('obfuscationSetting'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultValueSpec'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Required'),
                        new \PHPStan\Type\Constant\ConstantStringType('Optional'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('messages'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxAttempts'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_OBFUSCATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValueList'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxAttempts'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('prompt'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejectionStatement'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('messages'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxAttempts'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('messages'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('codeHook'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReturnIntent'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeHook'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('messageVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kendraIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('queryFilterString'),
                    new \PHPStan\Type\Constant\ConstantStringType('role'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeToLiveInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('turnsToLive'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getIntentVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('intents'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getIntents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('intents'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMigration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('migrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('v1BotName'),
                new \PHPStan\Type\Constant\ConstantStringType('v1BotVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('v1BotLocale'),
                new \PHPStan\Type\Constant\ConstantStringType('v2BotId'),
                new \PHPStan\Type\Constant\ConstantStringType('v2BotRole'),
                new \PHPStan\Type\Constant\ConstantStringType('migrationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('migrationStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('migrationTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('alerts'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-IN'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-419'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-ES'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ja-JP'),
                    new \PHPStan\Type\Constant\ConstantStringType('ko-KR'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_NEW'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_EXISTING'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('details'),
                    new \PHPStan\Type\Constant\ConstantStringType('referenceURLs'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getMigrations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('migrationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('migrationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('v1BotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('v1BotVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('v1BotLocale'),
                    new \PHPStan\Type\Constant\ConstantStringType('v2BotId'),
                    new \PHPStan\Type\Constant\ConstantStringType('v2BotRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('migrationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('migrationStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('migrationTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-419'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-ES'),
                        new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                        new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja-JP'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko-KR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_NEW'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_EXISTING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSlotType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('enumerationValues'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('valueSelectionStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('parentSlotTypeSignature'),
                new \PHPStan\Type\Constant\ConstantStringType('slotTypeConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('synonyms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL_VALUE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TOP_RESOLUTION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('regexConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSlotTypeVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('slotTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSlotTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('slotTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getUtterancesView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('botName'),
                new \PHPStan\Type\Constant\ConstantStringType('utterances'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('botVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('utterances'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('utteranceString'),
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('distinctUsers'),
                        new \PHPStan\Type\Constant\ConstantStringType('firstUtteredDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUtteredDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putBot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('intents'),
                new \PHPStan\Type\Constant\ConstantStringType('enableModelImprovements'),
                new \PHPStan\Type\Constant\ConstantStringType('nluIntentConfidenceThreshold'),
                new \PHPStan\Type\Constant\ConstantStringType('clarificationPrompt'),
                new \PHPStan\Type\Constant\ConstantStringType('abortStatement'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('idleSessionTTLInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('voiceId'),
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('locale'),
                new \PHPStan\Type\Constant\ConstantStringType('childDirected'),
                new \PHPStan\Type\Constant\ConstantStringType('createVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('detectSentiment'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('intentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('intentVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxAttempts'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    new \PHPStan\Type\Constant\ConstantStringType('READY_BASIC_TESTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_BUILT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-IN'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-419'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-ES'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ja-JP'),
                    new \PHPStan\Type\Constant\ConstantStringType('ko-KR'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putBotAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('botVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('botName'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('conversationLogs'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('logSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamRoleArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('logType'),
                        new \PHPStan\Type\Constant\ConstantStringType('destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourcePrefix'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AUDIO'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEXT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putIntent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('slots'),
                new \PHPStan\Type\Constant\ConstantStringType('sampleUtterances'),
                new \PHPStan\Type\Constant\ConstantStringType('confirmationPrompt'),
                new \PHPStan\Type\Constant\ConstantStringType('rejectionStatement'),
                new \PHPStan\Type\Constant\ConstantStringType('followUpPrompt'),
                new \PHPStan\Type\Constant\ConstantStringType('conclusionStatement'),
                new \PHPStan\Type\Constant\ConstantStringType('dialogCodeHook'),
                new \PHPStan\Type\Constant\ConstantStringType('fulfillmentActivity'),
                new \PHPStan\Type\Constant\ConstantStringType('parentIntentSignature'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('createVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('kendraConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('inputContexts'),
                new \PHPStan\Type\Constant\ConstantStringType('outputContexts'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('slotConstraint'),
                    new \PHPStan\Type\Constant\ConstantStringType('slotType'),
                    new \PHPStan\Type\Constant\ConstantStringType('slotTypeVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('valueElicitationPrompt'),
                    new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('sampleUtterances'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                    new \PHPStan\Type\Constant\ConstantStringType('obfuscationSetting'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultValueSpec'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Required'),
                        new \PHPStan\Type\Constant\ConstantStringType('Optional'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('messages'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxAttempts'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_OBFUSCATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValueList'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxAttempts'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('prompt'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejectionStatement'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('messages'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxAttempts'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('messages'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messages'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('content'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupNumber'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('codeHook'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReturnIntent'),
                        new \PHPStan\Type\Constant\ConstantStringType('CodeHook'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('messageVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kendraIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('queryFilterString'),
                    new \PHPStan\Type\Constant\ConstantStringType('role'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeToLiveInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('turnsToLive'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function putSlotType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('enumerationValues'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('valueSelectionStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('createVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('parentSlotTypeSignature'),
                new \PHPStan\Type\Constant\ConstantStringType('slotTypeConfigurations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('synonyms'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL_VALUE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TOP_RESOLUTION'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('regexConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('pattern'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function startImport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('mergeStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('importId'),
                new \PHPStan\Type\Constant\ConstantStringType('importStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTENT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SLOT_TYPE'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OVERWRITE_LATEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAIL_ON_CONFLICT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function startMigration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('v1BotName'),
                new \PHPStan\Type\Constant\ConstantStringType('v1BotVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('v1BotLocale'),
                new \PHPStan\Type\Constant\ConstantStringType('v2BotId'),
                new \PHPStan\Type\Constant\ConstantStringType('v2BotRole'),
                new \PHPStan\Type\Constant\ConstantStringType('migrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('migrationStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('migrationTimestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('de-DE'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-AU'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-GB'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-IN'),
                    new \PHPStan\Type\Constant\ConstantStringType('en-US'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-419'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-ES'),
                    new \PHPStan\Type\Constant\ConstantStringType('es-US'),
                    new \PHPStan\Type\Constant\ConstantStringType('fr-FR'),
                    new \PHPStan\Type\Constant\ConstantStringType('fr-CA'),
                    new \PHPStan\Type\Constant\ConstantStringType('it-IT'),
                    new \PHPStan\Type\Constant\ConstantStringType('ja-JP'),
                    new \PHPStan\Type\Constant\ConstantStringType('ko-KR'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_NEW'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_EXISTING'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
}