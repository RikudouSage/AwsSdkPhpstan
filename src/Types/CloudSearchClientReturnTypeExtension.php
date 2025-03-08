<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CloudSearchClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CloudSearch\CloudSearchClient>
     */
    public function getClass(): string
    {
        return \Aws\CloudSearch\CloudSearchClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'buildSuggesters',
            'createDomain',
            'defineAnalysisScheme',
            'defineExpression',
            'defineIndexField',
            'defineSuggester',
            'deleteAnalysisScheme',
            'deleteDomain',
            'deleteExpression',
            'deleteIndexField',
            'deleteSuggester',
            'describeAnalysisSchemes',
            'describeAvailabilityOptions',
            'describeDomainEndpointOptions',
            'describeDomains',
            'describeExpressions',
            'describeIndexFields',
            'describeScalingParameters',
            'describeServiceAccessPolicies',
            'describeSuggesters',
            'indexDocuments',
            'listDomainNames',
            'updateAvailabilityOptions',
            'updateDomainEndpointOptions',
            'updateScalingParameters',
            'updateServiceAccessPolicies',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'buildSuggesters' => $this->buildSuggesters(),
            'createDomain' => $this->createDomain(),
            'defineAnalysisScheme' => $this->defineAnalysisScheme(),
            'defineExpression' => $this->defineExpression(),
            'defineIndexField' => $this->defineIndexField(),
            'defineSuggester' => $this->defineSuggester(),
            'deleteAnalysisScheme' => $this->deleteAnalysisScheme(),
            'deleteDomain' => $this->deleteDomain(),
            'deleteExpression' => $this->deleteExpression(),
            'deleteIndexField' => $this->deleteIndexField(),
            'deleteSuggester' => $this->deleteSuggester(),
            'describeAnalysisSchemes' => $this->describeAnalysisSchemes(),
            'describeAvailabilityOptions' => $this->describeAvailabilityOptions(),
            'describeDomainEndpointOptions' => $this->describeDomainEndpointOptions(),
            'describeDomains' => $this->describeDomains(),
            'describeExpressions' => $this->describeExpressions(),
            'describeIndexFields' => $this->describeIndexFields(),
            'describeScalingParameters' => $this->describeScalingParameters(),
            'describeServiceAccessPolicies' => $this->describeServiceAccessPolicies(),
            'describeSuggesters' => $this->describeSuggesters(),
            'indexDocuments' => $this->indexDocuments(),
            'listDomainNames' => $this->listDomainNames(),
            'updateAvailabilityOptions' => $this->updateAvailabilityOptions(),
            'updateDomainEndpointOptions' => $this->updateDomainEndpointOptions(),
            'updateScalingParameters' => $this->updateScalingParameters(),
            'updateServiceAccessPolicies' => $this->updateServiceAccessPolicies(),
        };
    }
    private function buildSuggesters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FieldNames'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocService'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchService'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                    new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchInstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchPartitionCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchInstanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Limits'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumReplicationCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumPartitionCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function defineAnalysisScheme(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisScheme'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisSchemeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisSchemeLanguage'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ar'),
                            new \PHPStan\Type\Constant\ConstantStringType('bg'),
                            new \PHPStan\Type\Constant\ConstantStringType('ca'),
                            new \PHPStan\Type\Constant\ConstantStringType('cs'),
                            new \PHPStan\Type\Constant\ConstantStringType('da'),
                            new \PHPStan\Type\Constant\ConstantStringType('de'),
                            new \PHPStan\Type\Constant\ConstantStringType('el'),
                            new \PHPStan\Type\Constant\ConstantStringType('en'),
                            new \PHPStan\Type\Constant\ConstantStringType('es'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu'),
                            new \PHPStan\Type\Constant\ConstantStringType('fa'),
                            new \PHPStan\Type\Constant\ConstantStringType('fi'),
                            new \PHPStan\Type\Constant\ConstantStringType('fr'),
                            new \PHPStan\Type\Constant\ConstantStringType('ga'),
                            new \PHPStan\Type\Constant\ConstantStringType('gl'),
                            new \PHPStan\Type\Constant\ConstantStringType('he'),
                            new \PHPStan\Type\Constant\ConstantStringType('hi'),
                            new \PHPStan\Type\Constant\ConstantStringType('hu'),
                            new \PHPStan\Type\Constant\ConstantStringType('hy'),
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('it'),
                            new \PHPStan\Type\Constant\ConstantStringType('ja'),
                            new \PHPStan\Type\Constant\ConstantStringType('ko'),
                            new \PHPStan\Type\Constant\ConstantStringType('lv'),
                            new \PHPStan\Type\Constant\ConstantStringType('mul'),
                            new \PHPStan\Type\Constant\ConstantStringType('nl'),
                            new \PHPStan\Type\Constant\ConstantStringType('no'),
                            new \PHPStan\Type\Constant\ConstantStringType('pt'),
                            new \PHPStan\Type\Constant\ConstantStringType('ro'),
                            new \PHPStan\Type\Constant\ConstantStringType('ru'),
                            new \PHPStan\Type\Constant\ConstantStringType('sv'),
                            new \PHPStan\Type\Constant\ConstantStringType('th'),
                            new \PHPStan\Type\Constant\ConstantStringType('tr'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh-Hans'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh-Hant'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Synonyms'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopwords'),
                            new \PHPStan\Type\Constant\ConstantStringType('StemmingDictionary'),
                            new \PHPStan\Type\Constant\ConstantStringType('JapaneseTokenizationDictionary'),
                            new \PHPStan\Type\Constant\ConstantStringType('AlgorithmicStemming'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('minimal'),
                                new \PHPStan\Type\Constant\ConstantStringType('light'),
                                new \PHPStan\Type\Constant\ConstantStringType('full'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function defineExpression(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExpressionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpressionValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function defineIndexField(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IndexField'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                        new \PHPStan\Type\Constant\ConstantStringType('IndexFieldType'),
                        new \PHPStan\Type\Constant\ConstantStringType('IntOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DoubleOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('LiteralOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DateOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('LatLonOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('IntArrayOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DoubleArrayOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('LiteralArrayOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextArrayOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DateArrayOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('int'),
                            new \PHPStan\Type\Constant\ConstantStringType('double'),
                            new \PHPStan\Type\Constant\ConstantStringType('literal'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('date'),
                            new \PHPStan\Type\Constant\ConstantStringType('latlon'),
                            new \PHPStan\Type\Constant\ConstantStringType('int-array'),
                            new \PHPStan\Type\Constant\ConstantStringType('double-array'),
                            new \PHPStan\Type\Constant\ConstantStringType('literal-array'),
                            new \PHPStan\Type\Constant\ConstantStringType('text-array'),
                            new \PHPStan\Type\Constant\ConstantStringType('date-array'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('HighlightEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('AnalysisScheme'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('HighlightEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('AnalysisScheme'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function defineSuggester(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Suggester'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SuggesterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentSuggesterOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FuzzyMatching'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortExpression'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('low'),
                                new \PHPStan\Type\Constant\ConstantStringType('high'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteAnalysisScheme(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisScheme'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisSchemeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisSchemeLanguage'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ar'),
                            new \PHPStan\Type\Constant\ConstantStringType('bg'),
                            new \PHPStan\Type\Constant\ConstantStringType('ca'),
                            new \PHPStan\Type\Constant\ConstantStringType('cs'),
                            new \PHPStan\Type\Constant\ConstantStringType('da'),
                            new \PHPStan\Type\Constant\ConstantStringType('de'),
                            new \PHPStan\Type\Constant\ConstantStringType('el'),
                            new \PHPStan\Type\Constant\ConstantStringType('en'),
                            new \PHPStan\Type\Constant\ConstantStringType('es'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu'),
                            new \PHPStan\Type\Constant\ConstantStringType('fa'),
                            new \PHPStan\Type\Constant\ConstantStringType('fi'),
                            new \PHPStan\Type\Constant\ConstantStringType('fr'),
                            new \PHPStan\Type\Constant\ConstantStringType('ga'),
                            new \PHPStan\Type\Constant\ConstantStringType('gl'),
                            new \PHPStan\Type\Constant\ConstantStringType('he'),
                            new \PHPStan\Type\Constant\ConstantStringType('hi'),
                            new \PHPStan\Type\Constant\ConstantStringType('hu'),
                            new \PHPStan\Type\Constant\ConstantStringType('hy'),
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('it'),
                            new \PHPStan\Type\Constant\ConstantStringType('ja'),
                            new \PHPStan\Type\Constant\ConstantStringType('ko'),
                            new \PHPStan\Type\Constant\ConstantStringType('lv'),
                            new \PHPStan\Type\Constant\ConstantStringType('mul'),
                            new \PHPStan\Type\Constant\ConstantStringType('nl'),
                            new \PHPStan\Type\Constant\ConstantStringType('no'),
                            new \PHPStan\Type\Constant\ConstantStringType('pt'),
                            new \PHPStan\Type\Constant\ConstantStringType('ro'),
                            new \PHPStan\Type\Constant\ConstantStringType('ru'),
                            new \PHPStan\Type\Constant\ConstantStringType('sv'),
                            new \PHPStan\Type\Constant\ConstantStringType('th'),
                            new \PHPStan\Type\Constant\ConstantStringType('tr'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh-Hans'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh-Hant'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Synonyms'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopwords'),
                            new \PHPStan\Type\Constant\ConstantStringType('StemmingDictionary'),
                            new \PHPStan\Type\Constant\ConstantStringType('JapaneseTokenizationDictionary'),
                            new \PHPStan\Type\Constant\ConstantStringType('AlgorithmicStemming'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('minimal'),
                                new \PHPStan\Type\Constant\ConstantStringType('light'),
                                new \PHPStan\Type\Constant\ConstantStringType('full'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocService'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchService'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                    new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchInstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchPartitionCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchInstanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Limits'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumReplicationCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumPartitionCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteExpression(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExpressionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpressionValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteIndexField(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IndexField'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                        new \PHPStan\Type\Constant\ConstantStringType('IndexFieldType'),
                        new \PHPStan\Type\Constant\ConstantStringType('IntOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DoubleOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('LiteralOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DateOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('LatLonOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('IntArrayOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DoubleArrayOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('LiteralArrayOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextArrayOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DateArrayOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('int'),
                            new \PHPStan\Type\Constant\ConstantStringType('double'),
                            new \PHPStan\Type\Constant\ConstantStringType('literal'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('date'),
                            new \PHPStan\Type\Constant\ConstantStringType('latlon'),
                            new \PHPStan\Type\Constant\ConstantStringType('int-array'),
                            new \PHPStan\Type\Constant\ConstantStringType('double-array'),
                            new \PHPStan\Type\Constant\ConstantStringType('literal-array'),
                            new \PHPStan\Type\Constant\ConstantStringType('text-array'),
                            new \PHPStan\Type\Constant\ConstantStringType('date-array'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('HighlightEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('AnalysisScheme'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('HighlightEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('AnalysisScheme'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteSuggester(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Suggester'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SuggesterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentSuggesterOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FuzzyMatching'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortExpression'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('low'),
                                new \PHPStan\Type\Constant\ConstantStringType('high'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeAnalysisSchemes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnalysisSchemes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisSchemeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisSchemeLanguage'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnalysisOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ar'),
                            new \PHPStan\Type\Constant\ConstantStringType('bg'),
                            new \PHPStan\Type\Constant\ConstantStringType('ca'),
                            new \PHPStan\Type\Constant\ConstantStringType('cs'),
                            new \PHPStan\Type\Constant\ConstantStringType('da'),
                            new \PHPStan\Type\Constant\ConstantStringType('de'),
                            new \PHPStan\Type\Constant\ConstantStringType('el'),
                            new \PHPStan\Type\Constant\ConstantStringType('en'),
                            new \PHPStan\Type\Constant\ConstantStringType('es'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu'),
                            new \PHPStan\Type\Constant\ConstantStringType('fa'),
                            new \PHPStan\Type\Constant\ConstantStringType('fi'),
                            new \PHPStan\Type\Constant\ConstantStringType('fr'),
                            new \PHPStan\Type\Constant\ConstantStringType('ga'),
                            new \PHPStan\Type\Constant\ConstantStringType('gl'),
                            new \PHPStan\Type\Constant\ConstantStringType('he'),
                            new \PHPStan\Type\Constant\ConstantStringType('hi'),
                            new \PHPStan\Type\Constant\ConstantStringType('hu'),
                            new \PHPStan\Type\Constant\ConstantStringType('hy'),
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('it'),
                            new \PHPStan\Type\Constant\ConstantStringType('ja'),
                            new \PHPStan\Type\Constant\ConstantStringType('ko'),
                            new \PHPStan\Type\Constant\ConstantStringType('lv'),
                            new \PHPStan\Type\Constant\ConstantStringType('mul'),
                            new \PHPStan\Type\Constant\ConstantStringType('nl'),
                            new \PHPStan\Type\Constant\ConstantStringType('no'),
                            new \PHPStan\Type\Constant\ConstantStringType('pt'),
                            new \PHPStan\Type\Constant\ConstantStringType('ro'),
                            new \PHPStan\Type\Constant\ConstantStringType('ru'),
                            new \PHPStan\Type\Constant\ConstantStringType('sv'),
                            new \PHPStan\Type\Constant\ConstantStringType('th'),
                            new \PHPStan\Type\Constant\ConstantStringType('tr'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh-Hans'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh-Hant'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Synonyms'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stopwords'),
                            new \PHPStan\Type\Constant\ConstantStringType('StemmingDictionary'),
                            new \PHPStan\Type\Constant\ConstantStringType('JapaneseTokenizationDictionary'),
                            new \PHPStan\Type\Constant\ConstantStringType('AlgorithmicStemming'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('minimal'),
                                new \PHPStan\Type\Constant\ConstantStringType('light'),
                                new \PHPStan\Type\Constant\ConstantStringType('full'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeAvailabilityOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityOptions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeDomainEndpointOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainEndpointOptions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EnforceHTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLSSecurityPolicy'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-0-2019-07'),
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-2-2019-07'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeDomains(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainStatusList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocService'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchService'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                    new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchInstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchPartitionCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('SearchInstanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Limits'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumReplicationCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumPartitionCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeExpressions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Expressions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExpressionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpressionValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeIndexFields(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IndexFields'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IndexFieldName'),
                        new \PHPStan\Type\Constant\ConstantStringType('IndexFieldType'),
                        new \PHPStan\Type\Constant\ConstantStringType('IntOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DoubleOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('LiteralOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DateOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('LatLonOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('IntArrayOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DoubleArrayOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('LiteralArrayOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextArrayOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('DateArrayOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('int'),
                            new \PHPStan\Type\Constant\ConstantStringType('double'),
                            new \PHPStan\Type\Constant\ConstantStringType('literal'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('date'),
                            new \PHPStan\Type\Constant\ConstantStringType('latlon'),
                            new \PHPStan\Type\Constant\ConstantStringType('int-array'),
                            new \PHPStan\Type\Constant\ConstantStringType('double-array'),
                            new \PHPStan\Type\Constant\ConstantStringType('literal-array'),
                            new \PHPStan\Type\Constant\ConstantStringType('text-array'),
                            new \PHPStan\Type\Constant\ConstantStringType('date-array'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('HighlightEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('AnalysisScheme'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('HighlightEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('AnalysisScheme'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('FacetEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReturnEnabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeScalingParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScalingParameters'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DesiredInstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DesiredReplicationCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('DesiredPartitionCount'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('search.m1.small'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.m1.large'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.m2.xlarge'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.m2.2xlarge'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.m3.medium'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.m3.large'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.m3.xlarge'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.m3.2xlarge'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.small'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.medium'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.large'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.xlarge'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.2xlarge'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.previousgeneration.small'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.previousgeneration.large'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.previousgeneration.xlarge'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.previousgeneration.2xlarge'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeServiceAccessPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessPolicies'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeSuggesters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Suggesters'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SuggesterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DocumentSuggesterOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SourceField'),
                            new \PHPStan\Type\Constant\ConstantStringType('FuzzyMatching'),
                            new \PHPStan\Type\Constant\ConstantStringType('SortExpression'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('low'),
                                new \PHPStan\Type\Constant\ConstantStringType('high'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function indexDocuments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FieldNames'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDomainNames(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainNames'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateAvailabilityOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityOptions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateDomainEndpointOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainEndpointOptions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EnforceHTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLSSecurityPolicy'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-0-2019-07'),
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-2-2019-07'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateScalingParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScalingParameters'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DesiredInstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DesiredReplicationCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('DesiredPartitionCount'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('search.m1.small'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.m1.large'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.m2.xlarge'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.m2.2xlarge'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.m3.medium'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.m3.large'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.m3.xlarge'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.m3.2xlarge'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.small'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.medium'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.large'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.xlarge'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.2xlarge'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.previousgeneration.small'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.previousgeneration.large'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.previousgeneration.xlarge'),
                            new \PHPStan\Type\Constant\ConstantStringType('search.previousgeneration.2xlarge'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateServiceAccessPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessPolicies'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                            new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailedToValidate'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
}