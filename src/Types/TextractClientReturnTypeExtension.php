<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class TextractClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Textract\TextractClient>
     */
    public function getClass(): string
    {
        return \Aws\Textract\TextractClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'analyzeDocument',
            'analyzeExpense',
            'analyzeID',
            'createAdapter',
            'createAdapterVersion',
            'deleteAdapter',
            'deleteAdapterVersion',
            'detectDocumentText',
            'getAdapter',
            'getAdapterVersion',
            'getDocumentAnalysis',
            'getDocumentTextDetection',
            'getExpenseAnalysis',
            'getLendingAnalysis',
            'getLendingAnalysisSummary',
            'listAdapterVersions',
            'listAdapters',
            'listTagsForResource',
            'startDocumentAnalysis',
            'startDocumentTextDetection',
            'startExpenseAnalysis',
            'startLendingAnalysis',
            'tagResource',
            'untagResource',
            'updateAdapter',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'analyzeDocument' => $this->analyzeDocument(),
            'analyzeExpense' => $this->analyzeExpense(),
            'analyzeID' => $this->analyzeID(),
            'createAdapter' => $this->createAdapter(),
            'createAdapterVersion' => $this->createAdapterVersion(),
            'deleteAdapter' => $this->deleteAdapter(),
            'deleteAdapterVersion' => $this->deleteAdapterVersion(),
            'detectDocumentText' => $this->detectDocumentText(),
            'getAdapter' => $this->getAdapter(),
            'getAdapterVersion' => $this->getAdapterVersion(),
            'getDocumentAnalysis' => $this->getDocumentAnalysis(),
            'getDocumentTextDetection' => $this->getDocumentTextDetection(),
            'getExpenseAnalysis' => $this->getExpenseAnalysis(),
            'getLendingAnalysis' => $this->getLendingAnalysis(),
            'getLendingAnalysisSummary' => $this->getLendingAnalysisSummary(),
            'listAdapterVersions' => $this->listAdapterVersions(),
            'listAdapters' => $this->listAdapters(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startDocumentAnalysis' => $this->startDocumentAnalysis(),
            'startDocumentTextDetection' => $this->startDocumentTextDetection(),
            'startExpenseAnalysis' => $this->startExpenseAnalysis(),
            'startLendingAnalysis' => $this->startLendingAnalysis(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAdapter' => $this->updateAdapter(),
        };
    }
    private function analyzeDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('Blocks'),
                new \PHPStan\Type\Constant\ConstantStringType('HumanLoopActivationOutput'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalyzeDocumentModelVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BlockType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    new \PHPStan\Type\Constant\ConstantStringType('TextType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RowIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('RowSpan'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnSpan'),
                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Relationships'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Page'),
                    new \PHPStan\Type\Constant\ConstantStringType('Query'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_VALUE_SET'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CELL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELECTION_ELEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_RESULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FOOTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_SECTION_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_PAGE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FIGURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_KEY_VALUE'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HANDWRITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRINTED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ids'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLEX_FEATURES'),
                            new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANSWER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COLUMN_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_SECTION_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_SUMMARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRUCTURED_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_TABLE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_SELECTED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HumanLoopArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HumanLoopActivationReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('HumanLoopActivationConditionsEvaluationResults'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function analyzeExpense(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpenseDocuments'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExpenseIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('SummaryFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('LineItemGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('Blocks'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('LabelDetection'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValueDetection'),
                        new \PHPStan\Type\Constant\ConstantStringType('PageNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Currency'),
                        new \PHPStan\Type\Constant\ConstantStringType('GroupProperties'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Types'),
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LineItemGroupIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('LineItems'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LineItemExpenseFields'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('LabelDetection'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValueDetection'),
                                new \PHPStan\Type\Constant\ConstantStringType('PageNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('Currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('GroupProperties'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Types'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BlockType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RowIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColumnIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('RowSpan'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColumnSpan'),
                        new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Relationships'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('SelectionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Page'),
                        new \PHPStan\Type\Constant\ConstantStringType('Query'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('KEY_VALUE_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORD'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CELL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SELECTION_ELEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUERY'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUERY_RESULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_HEADER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FOOTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_SECTION_HEADER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_PAGE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_LIST'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FIGURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_KEY_VALUE'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HANDWRITING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRINTED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                            new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ids'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLEX_FEATURES'),
                                new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                                new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANSWER'),
                                new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COLUMN_HEADER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_SECTION_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_SUMMARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRUCTURED_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_SELECTED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function analyzeID(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityDocuments'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalyzeIDModelVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityDocumentFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('Blocks'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValueDetection'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('NormalizedValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('NormalizedValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BlockType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RowIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColumnIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('RowSpan'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColumnSpan'),
                        new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Relationships'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('SelectionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Page'),
                        new \PHPStan\Type\Constant\ConstantStringType('Query'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('KEY_VALUE_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORD'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CELL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SELECTION_ELEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUERY'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUERY_RESULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_HEADER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FOOTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_SECTION_HEADER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_PAGE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_LIST'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FIGURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_KEY_VALUE'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HANDWRITING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRINTED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                            new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ids'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLEX_FEATURES'),
                                new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                                new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANSWER'),
                                new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COLUMN_HEADER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_SECTION_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_SUMMARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRUCTURED_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_SELECTED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAdapter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdapterId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAdapterVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdapterId'),
                new \PHPStan\Type\Constant\ConstantStringType('AdapterVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAdapter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAdapterVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function detectDocumentText(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('Blocks'),
                new \PHPStan\Type\Constant\ConstantStringType('DetectDocumentTextModelVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BlockType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    new \PHPStan\Type\Constant\ConstantStringType('TextType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RowIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('RowSpan'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnSpan'),
                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Relationships'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Page'),
                    new \PHPStan\Type\Constant\ConstantStringType('Query'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_VALUE_SET'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CELL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELECTION_ELEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_RESULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FOOTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_SECTION_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_PAGE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FIGURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_KEY_VALUE'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HANDWRITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRINTED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ids'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLEX_FEATURES'),
                            new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANSWER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COLUMN_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_SECTION_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_SUMMARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRUCTURED_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_TABLE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_SELECTED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAdapter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdapterId'),
                new \PHPStan\Type\Constant\ConstantStringType('AdapterName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoUpdate'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                    new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUERIES'),
                    new \PHPStan\Type\Constant\ConstantStringType('SIGNATURES'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getAdapterVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdapterId'),
                new \PHPStan\Type\Constant\ConstantStringType('AdapterVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('DatasetConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('EvaluationMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                    new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUERIES'),
                    new \PHPStan\Type\Constant\ConstantStringType('SIGNATURES'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AT_RISK'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATION_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATION_IN_PROGRESS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestS3Object'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Prefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Baseline'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdapterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('FeatureType'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('F1Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('Precision'),
                        new \PHPStan\Type\Constant\ConstantStringType('Recall'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('F1Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('Precision'),
                        new \PHPStan\Type\Constant\ConstantStringType('Recall'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERIES'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIGNATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getDocumentAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Blocks'),
                new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalyzeDocumentModelVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BlockType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    new \PHPStan\Type\Constant\ConstantStringType('TextType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RowIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('RowSpan'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnSpan'),
                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Relationships'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Page'),
                    new \PHPStan\Type\Constant\ConstantStringType('Query'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_VALUE_SET'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CELL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELECTION_ELEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_RESULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FOOTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_SECTION_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_PAGE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FIGURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_KEY_VALUE'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HANDWRITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRINTED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ids'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLEX_FEATURES'),
                            new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANSWER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COLUMN_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_SECTION_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_SUMMARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRUCTURED_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_TABLE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_SELECTED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDocumentTextDetection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Blocks'),
                new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('DetectDocumentTextModelVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BlockType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    new \PHPStan\Type\Constant\ConstantStringType('TextType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RowIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('RowSpan'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnSpan'),
                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Relationships'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Page'),
                    new \PHPStan\Type\Constant\ConstantStringType('Query'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('KEY_VALUE_SET'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CELL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELECTION_ELEMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                        new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_RESULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TEXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FOOTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_SECTION_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_PAGE_NUMBER'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_LIST'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FIGURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_KEY_VALUE'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HANDWRITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRINTED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ids'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLEX_FEATURES'),
                            new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANSWER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COLUMN_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_SECTION_TITLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_SUMMARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRUCTURED_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_TABLE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_SELECTED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getExpenseAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpenseDocuments'),
                new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalyzeExpenseModelVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExpenseIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('SummaryFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('LineItemGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('Blocks'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('LabelDetection'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValueDetection'),
                        new \PHPStan\Type\Constant\ConstantStringType('PageNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Currency'),
                        new \PHPStan\Type\Constant\ConstantStringType('GroupProperties'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Types'),
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LineItemGroupIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('LineItems'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LineItemExpenseFields'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('LabelDetection'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValueDetection'),
                                new \PHPStan\Type\Constant\ConstantStringType('PageNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('Currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('GroupProperties'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Types'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BlockType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RowIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColumnIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('RowSpan'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColumnSpan'),
                        new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Relationships'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('SelectionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Page'),
                        new \PHPStan\Type\Constant\ConstantStringType('Query'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('KEY_VALUE_SET'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORD'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CELL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SELECTION_ELEMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUERY'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUERY_RESULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_HEADER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FOOTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_SECTION_HEADER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_PAGE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_LIST'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FIGURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_KEY_VALUE'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HANDWRITING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRINTED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                            new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ids'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLEX_FEATURES'),
                                new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                                new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANSWER'),
                                new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COLUMN_HEADER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_SECTION_TITLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TABLE_SUMMARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRUCTURED_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_SELECTED'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getLendingAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
                new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalyzeLendingModelVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Page'),
                    new \PHPStan\Type\Constant\ConstantStringType('PageClassification'),
                    new \PHPStan\Type\Constant\ConstantStringType('Extractions'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PageType'),
                        new \PHPStan\Type\Constant\ConstantStringType('PageNumber'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LendingDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpenseDocument'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityDocument'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LendingFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('SignatureDetections'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyDetection'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValueDetections'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SelectionStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NOT_SELECTED'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SelectionStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NOT_SELECTED'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                                    new \PHPStan\Type\FloatType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ExpenseIndex'),
                            new \PHPStan\Type\Constant\ConstantStringType('SummaryFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('LineItemGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Blocks'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('LabelDetection'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValueDetection'),
                                new \PHPStan\Type\Constant\ConstantStringType('PageNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('Currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('GroupProperties'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Types'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LineItemGroupIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('LineItems'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LineItemExpenseFields'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LabelDetection'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ValueDetection'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PageNumber'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Currency'),
                                        new \PHPStan\Type\Constant\ConstantStringType('GroupProperties'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Types'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BlockType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                new \PHPStan\Type\Constant\ConstantStringType('TextType'),
                                new \PHPStan\Type\Constant\ConstantStringType('RowIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('ColumnIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('RowSpan'),
                                new \PHPStan\Type\Constant\ConstantStringType('ColumnSpan'),
                                new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Relationships'),
                                new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                                new \PHPStan\Type\Constant\ConstantStringType('SelectionStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('Page'),
                                new \PHPStan\Type\Constant\ConstantStringType('Query'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY_VALUE_SET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LINE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WORD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CELL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SELECTION_ELEMENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUERY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUERY_RESULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TITLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_HEADER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FOOTER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_SECTION_HEADER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_PAGE_NUMBER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_LIST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FIGURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_KEY_VALUE'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HANDWRITING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRINTED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ids'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COMPLEX_FEATURES'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COLUMN_HEADER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE_SECTION_TITLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE_SUMMARY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRUCTURED_TABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_TABLE'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_SELECTED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentIndex'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentityDocumentFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('Blocks'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('ValueDetection'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NormalizedValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NormalizedValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BlockType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                new \PHPStan\Type\Constant\ConstantStringType('TextType'),
                                new \PHPStan\Type\Constant\ConstantStringType('RowIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('ColumnIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('RowSpan'),
                                new \PHPStan\Type\Constant\ConstantStringType('ColumnSpan'),
                                new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Relationships'),
                                new \PHPStan\Type\Constant\ConstantStringType('EntityTypes'),
                                new \PHPStan\Type\Constant\ConstantStringType('SelectionStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('Page'),
                                new \PHPStan\Type\Constant\ConstantStringType('Query'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY_VALUE_SET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LINE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WORD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CELL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SELECTION_ELEMENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUERY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUERY_RESULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SIGNATURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TEXT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TITLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_HEADER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FOOTER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_SECTION_HEADER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_PAGE_NUMBER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_LIST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_FIGURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_TABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT_KEY_VALUE'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HANDWRITING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRINTED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Width'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Height'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Top'),
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
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ids'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('COMPLEX_FEATURES'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MERGED_CELL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TITLE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ANSWER'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KEY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VALUE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COLUMN_HEADER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE_TITLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE_FOOTER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE_SECTION_TITLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE_SUMMARY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRUCTURED_TABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SEMI_STRUCTURED_TABLE'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SELECTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_SELECTED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getLendingAnalysisSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Summary'),
                new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalyzeLendingModelVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('UndetectedDocumentTypes'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('SplitDocuments'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetectedSignatures'),
                        new \PHPStan\Type\Constant\ConstantStringType('UndetectedSignatures'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Index'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Page'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Page'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Pages'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAdapterVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdapterVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdapterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdapterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERIES'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIGNATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AT_RISK'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAdapters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Adapters'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdapterId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdapterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERIES'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIGNATURES'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAYOUT'),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function startDocumentAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startDocumentTextDetection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startExpenseAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startLendingAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
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
    private function updateAdapter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AdapterId'),
                new \PHPStan\Type\Constant\ConstantStringType('AdapterName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('FeatureTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoUpdate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TABLES'),
                    new \PHPStan\Type\Constant\ConstantStringType('FORMS'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUERIES'),
                    new \PHPStan\Type\Constant\ConstantStringType('SIGNATURES'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAYOUT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
            ]),
        ]);
    }
}