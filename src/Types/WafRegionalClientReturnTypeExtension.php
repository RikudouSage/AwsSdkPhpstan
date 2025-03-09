<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class WafRegionalClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\WafRegional\WafRegionalClient>
     */
    public function getClass(): string
    {
        return \Aws\WafRegional\WafRegionalClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateWebACL',
            'createByteMatchSet',
            'createGeoMatchSet',
            'createIPSet',
            'createRateBasedRule',
            'createRegexMatchSet',
            'createRegexPatternSet',
            'createRule',
            'createRuleGroup',
            'createSizeConstraintSet',
            'createSqlInjectionMatchSet',
            'createWebACL',
            'createWebACLMigrationStack',
            'createXssMatchSet',
            'deleteByteMatchSet',
            'deleteGeoMatchSet',
            'deleteIPSet',
            'deleteLoggingConfiguration',
            'deletePermissionPolicy',
            'deleteRateBasedRule',
            'deleteRegexMatchSet',
            'deleteRegexPatternSet',
            'deleteRule',
            'deleteRuleGroup',
            'deleteSizeConstraintSet',
            'deleteSqlInjectionMatchSet',
            'deleteWebACL',
            'deleteXssMatchSet',
            'disassociateWebACL',
            'getByteMatchSet',
            'getChangeToken',
            'getChangeTokenStatus',
            'getGeoMatchSet',
            'getIPSet',
            'getLoggingConfiguration',
            'getPermissionPolicy',
            'getRateBasedRule',
            'getRateBasedRuleManagedKeys',
            'getRegexMatchSet',
            'getRegexPatternSet',
            'getRule',
            'getRuleGroup',
            'getSampledRequests',
            'getSizeConstraintSet',
            'getSqlInjectionMatchSet',
            'getWebACL',
            'getWebACLForResource',
            'getXssMatchSet',
            'listActivatedRulesInRuleGroup',
            'listByteMatchSets',
            'listGeoMatchSets',
            'listIPSets',
            'listLoggingConfigurations',
            'listRateBasedRules',
            'listRegexMatchSets',
            'listRegexPatternSets',
            'listResourcesForWebACL',
            'listRuleGroups',
            'listRules',
            'listSizeConstraintSets',
            'listSqlInjectionMatchSets',
            'listSubscribedRuleGroups',
            'listTagsForResource',
            'listWebACLs',
            'listXssMatchSets',
            'putLoggingConfiguration',
            'putPermissionPolicy',
            'tagResource',
            'untagResource',
            'updateByteMatchSet',
            'updateGeoMatchSet',
            'updateIPSet',
            'updateRateBasedRule',
            'updateRegexMatchSet',
            'updateRegexPatternSet',
            'updateRule',
            'updateRuleGroup',
            'updateSizeConstraintSet',
            'updateSqlInjectionMatchSet',
            'updateWebACL',
            'updateXssMatchSet',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateWebACL' => $this->associateWebACL(),
            'createByteMatchSet' => $this->createByteMatchSet(),
            'createGeoMatchSet' => $this->createGeoMatchSet(),
            'createIPSet' => $this->createIPSet(),
            'createRateBasedRule' => $this->createRateBasedRule(),
            'createRegexMatchSet' => $this->createRegexMatchSet(),
            'createRegexPatternSet' => $this->createRegexPatternSet(),
            'createRule' => $this->createRule(),
            'createRuleGroup' => $this->createRuleGroup(),
            'createSizeConstraintSet' => $this->createSizeConstraintSet(),
            'createSqlInjectionMatchSet' => $this->createSqlInjectionMatchSet(),
            'createWebACL' => $this->createWebACL(),
            'createWebACLMigrationStack' => $this->createWebACLMigrationStack(),
            'createXssMatchSet' => $this->createXssMatchSet(),
            'deleteByteMatchSet' => $this->deleteByteMatchSet(),
            'deleteGeoMatchSet' => $this->deleteGeoMatchSet(),
            'deleteIPSet' => $this->deleteIPSet(),
            'deleteLoggingConfiguration' => $this->deleteLoggingConfiguration(),
            'deletePermissionPolicy' => $this->deletePermissionPolicy(),
            'deleteRateBasedRule' => $this->deleteRateBasedRule(),
            'deleteRegexMatchSet' => $this->deleteRegexMatchSet(),
            'deleteRegexPatternSet' => $this->deleteRegexPatternSet(),
            'deleteRule' => $this->deleteRule(),
            'deleteRuleGroup' => $this->deleteRuleGroup(),
            'deleteSizeConstraintSet' => $this->deleteSizeConstraintSet(),
            'deleteSqlInjectionMatchSet' => $this->deleteSqlInjectionMatchSet(),
            'deleteWebACL' => $this->deleteWebACL(),
            'deleteXssMatchSet' => $this->deleteXssMatchSet(),
            'disassociateWebACL' => $this->disassociateWebACL(),
            'getByteMatchSet' => $this->getByteMatchSet(),
            'getChangeToken' => $this->getChangeToken(),
            'getChangeTokenStatus' => $this->getChangeTokenStatus(),
            'getGeoMatchSet' => $this->getGeoMatchSet(),
            'getIPSet' => $this->getIPSet(),
            'getLoggingConfiguration' => $this->getLoggingConfiguration(),
            'getPermissionPolicy' => $this->getPermissionPolicy(),
            'getRateBasedRule' => $this->getRateBasedRule(),
            'getRateBasedRuleManagedKeys' => $this->getRateBasedRuleManagedKeys(),
            'getRegexMatchSet' => $this->getRegexMatchSet(),
            'getRegexPatternSet' => $this->getRegexPatternSet(),
            'getRule' => $this->getRule(),
            'getRuleGroup' => $this->getRuleGroup(),
            'getSampledRequests' => $this->getSampledRequests(),
            'getSizeConstraintSet' => $this->getSizeConstraintSet(),
            'getSqlInjectionMatchSet' => $this->getSqlInjectionMatchSet(),
            'getWebACL' => $this->getWebACL(),
            'getWebACLForResource' => $this->getWebACLForResource(),
            'getXssMatchSet' => $this->getXssMatchSet(),
            'listActivatedRulesInRuleGroup' => $this->listActivatedRulesInRuleGroup(),
            'listByteMatchSets' => $this->listByteMatchSets(),
            'listGeoMatchSets' => $this->listGeoMatchSets(),
            'listIPSets' => $this->listIPSets(),
            'listLoggingConfigurations' => $this->listLoggingConfigurations(),
            'listRateBasedRules' => $this->listRateBasedRules(),
            'listRegexMatchSets' => $this->listRegexMatchSets(),
            'listRegexPatternSets' => $this->listRegexPatternSets(),
            'listResourcesForWebACL' => $this->listResourcesForWebACL(),
            'listRuleGroups' => $this->listRuleGroups(),
            'listRules' => $this->listRules(),
            'listSizeConstraintSets' => $this->listSizeConstraintSets(),
            'listSqlInjectionMatchSets' => $this->listSqlInjectionMatchSets(),
            'listSubscribedRuleGroups' => $this->listSubscribedRuleGroups(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWebACLs' => $this->listWebACLs(),
            'listXssMatchSets' => $this->listXssMatchSets(),
            'putLoggingConfiguration' => $this->putLoggingConfiguration(),
            'putPermissionPolicy' => $this->putPermissionPolicy(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateByteMatchSet' => $this->updateByteMatchSet(),
            'updateGeoMatchSet' => $this->updateGeoMatchSet(),
            'updateIPSet' => $this->updateIPSet(),
            'updateRateBasedRule' => $this->updateRateBasedRule(),
            'updateRegexMatchSet' => $this->updateRegexMatchSet(),
            'updateRegexPatternSet' => $this->updateRegexPatternSet(),
            'updateRule' => $this->updateRule(),
            'updateRuleGroup' => $this->updateRuleGroup(),
            'updateSizeConstraintSet' => $this->updateSizeConstraintSet(),
            'updateSqlInjectionMatchSet' => $this->updateSqlInjectionMatchSet(),
            'updateWebACL' => $this->updateWebACL(),
            'updateXssMatchSet' => $this->updateXssMatchSet(),
        };
    }
    private function associateWebACL(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createByteMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ByteMatchSet'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ByteMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ByteMatchTuples'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FieldToMatch'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetString'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextTransformation'),
                        new \PHPStan\Type\Constant\ConstantStringType('PositionalConstraint'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('URI'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                                new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                                new \PHPStan\Type\Constant\ConstantStringType('BODY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SINGLE_QUERY_ARG'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL_QUERY_ARGS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPRESS_WHITE_SPACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTML_ENTITY_DECODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOWERCASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CMD_LINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL_DECODE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXACTLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS_WORD'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createGeoMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GeoMatchSet'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMatchConstraints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AF'),
                            new \PHPStan\Type\Constant\ConstantStringType('AX'),
                            new \PHPStan\Type\Constant\ConstantStringType('AL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('AS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AD'),
                            new \PHPStan\Type\Constant\ConstantStringType('AO'),
                            new \PHPStan\Type\Constant\ConstantStringType('AI'),
                            new \PHPStan\Type\Constant\ConstantStringType('AQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('AG'),
                            new \PHPStan\Type\Constant\ConstantStringType('AR'),
                            new \PHPStan\Type\Constant\ConstantStringType('AM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AW'),
                            new \PHPStan\Type\Constant\ConstantStringType('AU'),
                            new \PHPStan\Type\Constant\ConstantStringType('AT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BH'),
                            new \PHPStan\Type\Constant\ConstantStringType('BD'),
                            new \PHPStan\Type\Constant\ConstantStringType('BB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('BJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('BM'),
                            new \PHPStan\Type\Constant\ConstantStringType('BT'),
                            new \PHPStan\Type\Constant\ConstantStringType('BO'),
                            new \PHPStan\Type\Constant\ConstantStringType('BQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('BA'),
                            new \PHPStan\Type\Constant\ConstantStringType('BW'),
                            new \PHPStan\Type\Constant\ConstantStringType('BV'),
                            new \PHPStan\Type\Constant\ConstantStringType('BR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IO'),
                            new \PHPStan\Type\Constant\ConstantStringType('BN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BG'),
                            new \PHPStan\Type\Constant\ConstantStringType('BF'),
                            new \PHPStan\Type\Constant\ConstantStringType('BI'),
                            new \PHPStan\Type\Constant\ConstantStringType('KH'),
                            new \PHPStan\Type\Constant\ConstantStringType('CM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CA'),
                            new \PHPStan\Type\Constant\ConstantStringType('CV'),
                            new \PHPStan\Type\Constant\ConstantStringType('KY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CF'),
                            new \PHPStan\Type\Constant\ConstantStringType('TD'),
                            new \PHPStan\Type\Constant\ConstantStringType('CL'),
                            new \PHPStan\Type\Constant\ConstantStringType('CN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CX'),
                            new \PHPStan\Type\Constant\ConstantStringType('CC'),
                            new \PHPStan\Type\Constant\ConstantStringType('CO'),
                            new \PHPStan\Type\Constant\ConstantStringType('KM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CG'),
                            new \PHPStan\Type\Constant\ConstantStringType('CD'),
                            new \PHPStan\Type\Constant\ConstantStringType('CK'),
                            new \PHPStan\Type\Constant\ConstantStringType('CR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CI'),
                            new \PHPStan\Type\Constant\ConstantStringType('HR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CU'),
                            new \PHPStan\Type\Constant\ConstantStringType('CW'),
                            new \PHPStan\Type\Constant\ConstantStringType('CY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('DK'),
                            new \PHPStan\Type\Constant\ConstantStringType('DJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('DM'),
                            new \PHPStan\Type\Constant\ConstantStringType('DO'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC'),
                            new \PHPStan\Type\Constant\ConstantStringType('EG'),
                            new \PHPStan\Type\Constant\ConstantStringType('SV'),
                            new \PHPStan\Type\Constant\ConstantStringType('GQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('ER'),
                            new \PHPStan\Type\Constant\ConstantStringType('EE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ET'),
                            new \PHPStan\Type\Constant\ConstantStringType('FK'),
                            new \PHPStan\Type\Constant\ConstantStringType('FO'),
                            new \PHPStan\Type\Constant\ConstantStringType('FJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('FI'),
                            new \PHPStan\Type\Constant\ConstantStringType('FR'),
                            new \PHPStan\Type\Constant\ConstantStringType('GF'),
                            new \PHPStan\Type\Constant\ConstantStringType('PF'),
                            new \PHPStan\Type\Constant\ConstantStringType('TF'),
                            new \PHPStan\Type\Constant\ConstantStringType('GA'),
                            new \PHPStan\Type\Constant\ConstantStringType('GM'),
                            new \PHPStan\Type\Constant\ConstantStringType('GE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GH'),
                            new \PHPStan\Type\Constant\ConstantStringType('GI'),
                            new \PHPStan\Type\Constant\ConstantStringType('GR'),
                            new \PHPStan\Type\Constant\ConstantStringType('GL'),
                            new \PHPStan\Type\Constant\ConstantStringType('GD'),
                            new \PHPStan\Type\Constant\ConstantStringType('GP'),
                            new \PHPStan\Type\Constant\ConstantStringType('GU'),
                            new \PHPStan\Type\Constant\ConstantStringType('GT'),
                            new \PHPStan\Type\Constant\ConstantStringType('GG'),
                            new \PHPStan\Type\Constant\ConstantStringType('GN'),
                            new \PHPStan\Type\Constant\ConstantStringType('GW'),
                            new \PHPStan\Type\Constant\ConstantStringType('GY'),
                            new \PHPStan\Type\Constant\ConstantStringType('HT'),
                            new \PHPStan\Type\Constant\ConstantStringType('HM'),
                            new \PHPStan\Type\Constant\ConstantStringType('VA'),
                            new \PHPStan\Type\Constant\ConstantStringType('HN'),
                            new \PHPStan\Type\Constant\ConstantStringType('HK'),
                            new \PHPStan\Type\Constant\ConstantStringType('HU'),
                            new \PHPStan\Type\Constant\ConstantStringType('IS'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('IR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('IE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IM'),
                            new \PHPStan\Type\Constant\ConstantStringType('IL'),
                            new \PHPStan\Type\Constant\ConstantStringType('IT'),
                            new \PHPStan\Type\Constant\ConstantStringType('JM'),
                            new \PHPStan\Type\Constant\ConstantStringType('JP'),
                            new \PHPStan\Type\Constant\ConstantStringType('JE'),
                            new \PHPStan\Type\Constant\ConstantStringType('JO'),
                            new \PHPStan\Type\Constant\ConstantStringType('KZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('KE'),
                            new \PHPStan\Type\Constant\ConstantStringType('KI'),
                            new \PHPStan\Type\Constant\ConstantStringType('KP'),
                            new \PHPStan\Type\Constant\ConstantStringType('KR'),
                            new \PHPStan\Type\Constant\ConstantStringType('KW'),
                            new \PHPStan\Type\Constant\ConstantStringType('KG'),
                            new \PHPStan\Type\Constant\ConstantStringType('LA'),
                            new \PHPStan\Type\Constant\ConstantStringType('LV'),
                            new \PHPStan\Type\Constant\ConstantStringType('LB'),
                            new \PHPStan\Type\Constant\ConstantStringType('LS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LR'),
                            new \PHPStan\Type\Constant\ConstantStringType('LY'),
                            new \PHPStan\Type\Constant\ConstantStringType('LI'),
                            new \PHPStan\Type\Constant\ConstantStringType('LT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LU'),
                            new \PHPStan\Type\Constant\ConstantStringType('MO'),
                            new \PHPStan\Type\Constant\ConstantStringType('MK'),
                            new \PHPStan\Type\Constant\ConstantStringType('MG'),
                            new \PHPStan\Type\Constant\ConstantStringType('MW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MV'),
                            new \PHPStan\Type\Constant\ConstantStringType('ML'),
                            new \PHPStan\Type\Constant\ConstantStringType('MT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('MR'),
                            new \PHPStan\Type\Constant\ConstantStringType('MU'),
                            new \PHPStan\Type\Constant\ConstantStringType('YT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MX'),
                            new \PHPStan\Type\Constant\ConstantStringType('FM'),
                            new \PHPStan\Type\Constant\ConstantStringType('MD'),
                            new \PHPStan\Type\Constant\ConstantStringType('MC'),
                            new \PHPStan\Type\Constant\ConstantStringType('MN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ME'),
                            new \PHPStan\Type\Constant\ConstantStringType('MS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MA'),
                            new \PHPStan\Type\Constant\ConstantStringType('MZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('MM'),
                            new \PHPStan\Type\Constant\ConstantStringType('NA'),
                            new \PHPStan\Type\Constant\ConstantStringType('NR'),
                            new \PHPStan\Type\Constant\ConstantStringType('NP'),
                            new \PHPStan\Type\Constant\ConstantStringType('NL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('NI'),
                            new \PHPStan\Type\Constant\ConstantStringType('NE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NG'),
                            new \PHPStan\Type\Constant\ConstantStringType('NU'),
                            new \PHPStan\Type\Constant\ConstantStringType('NF'),
                            new \PHPStan\Type\Constant\ConstantStringType('MP'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO'),
                            new \PHPStan\Type\Constant\ConstantStringType('OM'),
                            new \PHPStan\Type\Constant\ConstantStringType('PK'),
                            new \PHPStan\Type\Constant\ConstantStringType('PW'),
                            new \PHPStan\Type\Constant\ConstantStringType('PS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PA'),
                            new \PHPStan\Type\Constant\ConstantStringType('PG'),
                            new \PHPStan\Type\Constant\ConstantStringType('PY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PH'),
                            new \PHPStan\Type\Constant\ConstantStringType('PN'),
                            new \PHPStan\Type\Constant\ConstantStringType('PL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PR'),
                            new \PHPStan\Type\Constant\ConstantStringType('QA'),
                            new \PHPStan\Type\Constant\ConstantStringType('RE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RO'),
                            new \PHPStan\Type\Constant\ConstantStringType('RU'),
                            new \PHPStan\Type\Constant\ConstantStringType('RW'),
                            new \PHPStan\Type\Constant\ConstantStringType('BL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SH'),
                            new \PHPStan\Type\Constant\ConstantStringType('KN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LC'),
                            new \PHPStan\Type\Constant\ConstantStringType('MF'),
                            new \PHPStan\Type\Constant\ConstantStringType('PM'),
                            new \PHPStan\Type\Constant\ConstantStringType('VC'),
                            new \PHPStan\Type\Constant\ConstantStringType('WS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SM'),
                            new \PHPStan\Type\Constant\ConstantStringType('ST'),
                            new \PHPStan\Type\Constant\ConstantStringType('SA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SN'),
                            new \PHPStan\Type\Constant\ConstantStringType('RS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SG'),
                            new \PHPStan\Type\Constant\ConstantStringType('SX'),
                            new \PHPStan\Type\Constant\ConstantStringType('SK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SI'),
                            new \PHPStan\Type\Constant\ConstantStringType('SB'),
                            new \PHPStan\Type\Constant\ConstantStringType('SO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZA'),
                            new \PHPStan\Type\Constant\ConstantStringType('GS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ES'),
                            new \PHPStan\Type\Constant\ConstantStringType('LK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('SZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('SE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CH'),
                            new \PHPStan\Type\Constant\ConstantStringType('SY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TW'),
                            new \PHPStan\Type\Constant\ConstantStringType('TJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TH'),
                            new \PHPStan\Type\Constant\ConstantStringType('TL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TG'),
                            new \PHPStan\Type\Constant\ConstantStringType('TK'),
                            new \PHPStan\Type\Constant\ConstantStringType('TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('TT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TN'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR'),
                            new \PHPStan\Type\Constant\ConstantStringType('TM'),
                            new \PHPStan\Type\Constant\ConstantStringType('TC'),
                            new \PHPStan\Type\Constant\ConstantStringType('TV'),
                            new \PHPStan\Type\Constant\ConstantStringType('UG'),
                            new \PHPStan\Type\Constant\ConstantStringType('UA'),
                            new \PHPStan\Type\Constant\ConstantStringType('AE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('US'),
                            new \PHPStan\Type\Constant\ConstantStringType('UM'),
                            new \PHPStan\Type\Constant\ConstantStringType('UY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('VU'),
                            new \PHPStan\Type\Constant\ConstantStringType('VE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VG'),
                            new \PHPStan\Type\Constant\ConstantStringType('VI'),
                            new \PHPStan\Type\Constant\ConstantStringType('WF'),
                            new \PHPStan\Type\Constant\ConstantStringType('EH'),
                            new \PHPStan\Type\Constant\ConstantStringType('YE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZM'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZW'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createIPSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IPSet'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IPSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPSetDescriptors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRateBasedRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchPredicates'),
                    new \PHPStan\Type\Constant\ConstantStringType('RateKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('RateLimit'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Negated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataId'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ByteMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('SqlInjectionMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('GeoMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('SizeConstraint'),
                            new \PHPStan\Type\Constant\ConstantStringType('XssMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('RegexMatch'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantStringType('IP'),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRegexMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegexMatchSet'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RegexMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegexMatchTuples'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FieldToMatch'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextTransformation'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegexPatternSetId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('URI'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                                new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                                new \PHPStan\Type\Constant\ConstantStringType('BODY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SINGLE_QUERY_ARG'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL_QUERY_ARGS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPRESS_WHITE_SPACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTML_ENTITY_DECODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOWERCASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CMD_LINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL_DECODE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRegexPatternSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegexPatternSet'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RegexPatternSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegexPatternStrings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Predicates'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Negated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataId'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ByteMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('SqlInjectionMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('GeoMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('SizeConstraint'),
                            new \PHPStan\Type\Constant\ConstantStringType('XssMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('RegexMatch'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRuleGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RuleGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSizeConstraintSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SizeConstraintSet'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SizeConstraintSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('SizeConstraints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FieldToMatch'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextTransformation'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('URI'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                                new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                                new \PHPStan\Type\Constant\ConstantStringType('BODY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SINGLE_QUERY_ARG'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL_QUERY_ARGS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPRESS_WHITE_SPACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTML_ENTITY_DECODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOWERCASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CMD_LINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL_DECODE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('NE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LT'),
                            new \PHPStan\Type\Constant\ConstantStringType('GE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GT'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createSqlInjectionMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SqlInjectionMatchSet'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SqlInjectionMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('SqlInjectionMatchTuples'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FieldToMatch'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextTransformation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('URI'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                                new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                                new \PHPStan\Type\Constant\ConstantStringType('BODY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SINGLE_QUERY_ARG'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL_QUERY_ARGS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPRESS_WHITE_SPACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTML_ENTITY_DECODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOWERCASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CMD_LINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL_DECODE'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWebACL(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WebACL'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebACLArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('OverrideAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludedRules'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGULAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('RATE_BASED'),
                            new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWebACLMigrationStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('S3ObjectUrl'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createXssMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('XssMatchSet'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('XssMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('XssMatchTuples'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FieldToMatch'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextTransformation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('URI'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                                new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                                new \PHPStan\Type\Constant\ConstantStringType('BODY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SINGLE_QUERY_ARG'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL_QUERY_ARGS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPRESS_WHITE_SPACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTML_ENTITY_DECODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOWERCASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CMD_LINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL_DECODE'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteByteMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteGeoMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteIPSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteLoggingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePermissionPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRateBasedRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteRegexMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteRegexPatternSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteRuleGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteSizeConstraintSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteSqlInjectionMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteWebACL(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteXssMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateWebACL(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getByteMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ByteMatchSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ByteMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ByteMatchTuples'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FieldToMatch'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetString'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextTransformation'),
                        new \PHPStan\Type\Constant\ConstantStringType('PositionalConstraint'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('URI'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                                new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                                new \PHPStan\Type\Constant\ConstantStringType('BODY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SINGLE_QUERY_ARG'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL_QUERY_ARGS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPRESS_WHITE_SPACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTML_ENTITY_DECODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOWERCASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CMD_LINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL_DECODE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXACTLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTS_WITH'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENDS_WITH'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTAINS_WORD'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getChangeToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getChangeTokenStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeTokenStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INSYNC'),
                ]),
            ]),
        ]);
    }
    private function getGeoMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GeoMatchSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMatchConstraints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AF'),
                            new \PHPStan\Type\Constant\ConstantStringType('AX'),
                            new \PHPStan\Type\Constant\ConstantStringType('AL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('AS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AD'),
                            new \PHPStan\Type\Constant\ConstantStringType('AO'),
                            new \PHPStan\Type\Constant\ConstantStringType('AI'),
                            new \PHPStan\Type\Constant\ConstantStringType('AQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('AG'),
                            new \PHPStan\Type\Constant\ConstantStringType('AR'),
                            new \PHPStan\Type\Constant\ConstantStringType('AM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AW'),
                            new \PHPStan\Type\Constant\ConstantStringType('AU'),
                            new \PHPStan\Type\Constant\ConstantStringType('AT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BH'),
                            new \PHPStan\Type\Constant\ConstantStringType('BD'),
                            new \PHPStan\Type\Constant\ConstantStringType('BB'),
                            new \PHPStan\Type\Constant\ConstantStringType('BY'),
                            new \PHPStan\Type\Constant\ConstantStringType('BE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('BJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('BM'),
                            new \PHPStan\Type\Constant\ConstantStringType('BT'),
                            new \PHPStan\Type\Constant\ConstantStringType('BO'),
                            new \PHPStan\Type\Constant\ConstantStringType('BQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('BA'),
                            new \PHPStan\Type\Constant\ConstantStringType('BW'),
                            new \PHPStan\Type\Constant\ConstantStringType('BV'),
                            new \PHPStan\Type\Constant\ConstantStringType('BR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IO'),
                            new \PHPStan\Type\Constant\ConstantStringType('BN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BG'),
                            new \PHPStan\Type\Constant\ConstantStringType('BF'),
                            new \PHPStan\Type\Constant\ConstantStringType('BI'),
                            new \PHPStan\Type\Constant\ConstantStringType('KH'),
                            new \PHPStan\Type\Constant\ConstantStringType('CM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CA'),
                            new \PHPStan\Type\Constant\ConstantStringType('CV'),
                            new \PHPStan\Type\Constant\ConstantStringType('KY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CF'),
                            new \PHPStan\Type\Constant\ConstantStringType('TD'),
                            new \PHPStan\Type\Constant\ConstantStringType('CL'),
                            new \PHPStan\Type\Constant\ConstantStringType('CN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CX'),
                            new \PHPStan\Type\Constant\ConstantStringType('CC'),
                            new \PHPStan\Type\Constant\ConstantStringType('CO'),
                            new \PHPStan\Type\Constant\ConstantStringType('KM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CG'),
                            new \PHPStan\Type\Constant\ConstantStringType('CD'),
                            new \PHPStan\Type\Constant\ConstantStringType('CK'),
                            new \PHPStan\Type\Constant\ConstantStringType('CR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CI'),
                            new \PHPStan\Type\Constant\ConstantStringType('HR'),
                            new \PHPStan\Type\Constant\ConstantStringType('CU'),
                            new \PHPStan\Type\Constant\ConstantStringType('CW'),
                            new \PHPStan\Type\Constant\ConstantStringType('CY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('DK'),
                            new \PHPStan\Type\Constant\ConstantStringType('DJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('DM'),
                            new \PHPStan\Type\Constant\ConstantStringType('DO'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC'),
                            new \PHPStan\Type\Constant\ConstantStringType('EG'),
                            new \PHPStan\Type\Constant\ConstantStringType('SV'),
                            new \PHPStan\Type\Constant\ConstantStringType('GQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('ER'),
                            new \PHPStan\Type\Constant\ConstantStringType('EE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ET'),
                            new \PHPStan\Type\Constant\ConstantStringType('FK'),
                            new \PHPStan\Type\Constant\ConstantStringType('FO'),
                            new \PHPStan\Type\Constant\ConstantStringType('FJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('FI'),
                            new \PHPStan\Type\Constant\ConstantStringType('FR'),
                            new \PHPStan\Type\Constant\ConstantStringType('GF'),
                            new \PHPStan\Type\Constant\ConstantStringType('PF'),
                            new \PHPStan\Type\Constant\ConstantStringType('TF'),
                            new \PHPStan\Type\Constant\ConstantStringType('GA'),
                            new \PHPStan\Type\Constant\ConstantStringType('GM'),
                            new \PHPStan\Type\Constant\ConstantStringType('GE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GH'),
                            new \PHPStan\Type\Constant\ConstantStringType('GI'),
                            new \PHPStan\Type\Constant\ConstantStringType('GR'),
                            new \PHPStan\Type\Constant\ConstantStringType('GL'),
                            new \PHPStan\Type\Constant\ConstantStringType('GD'),
                            new \PHPStan\Type\Constant\ConstantStringType('GP'),
                            new \PHPStan\Type\Constant\ConstantStringType('GU'),
                            new \PHPStan\Type\Constant\ConstantStringType('GT'),
                            new \PHPStan\Type\Constant\ConstantStringType('GG'),
                            new \PHPStan\Type\Constant\ConstantStringType('GN'),
                            new \PHPStan\Type\Constant\ConstantStringType('GW'),
                            new \PHPStan\Type\Constant\ConstantStringType('GY'),
                            new \PHPStan\Type\Constant\ConstantStringType('HT'),
                            new \PHPStan\Type\Constant\ConstantStringType('HM'),
                            new \PHPStan\Type\Constant\ConstantStringType('VA'),
                            new \PHPStan\Type\Constant\ConstantStringType('HN'),
                            new \PHPStan\Type\Constant\ConstantStringType('HK'),
                            new \PHPStan\Type\Constant\ConstantStringType('HU'),
                            new \PHPStan\Type\Constant\ConstantStringType('IS'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('IR'),
                            new \PHPStan\Type\Constant\ConstantStringType('IQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('IE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IM'),
                            new \PHPStan\Type\Constant\ConstantStringType('IL'),
                            new \PHPStan\Type\Constant\ConstantStringType('IT'),
                            new \PHPStan\Type\Constant\ConstantStringType('JM'),
                            new \PHPStan\Type\Constant\ConstantStringType('JP'),
                            new \PHPStan\Type\Constant\ConstantStringType('JE'),
                            new \PHPStan\Type\Constant\ConstantStringType('JO'),
                            new \PHPStan\Type\Constant\ConstantStringType('KZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('KE'),
                            new \PHPStan\Type\Constant\ConstantStringType('KI'),
                            new \PHPStan\Type\Constant\ConstantStringType('KP'),
                            new \PHPStan\Type\Constant\ConstantStringType('KR'),
                            new \PHPStan\Type\Constant\ConstantStringType('KW'),
                            new \PHPStan\Type\Constant\ConstantStringType('KG'),
                            new \PHPStan\Type\Constant\ConstantStringType('LA'),
                            new \PHPStan\Type\Constant\ConstantStringType('LV'),
                            new \PHPStan\Type\Constant\ConstantStringType('LB'),
                            new \PHPStan\Type\Constant\ConstantStringType('LS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LR'),
                            new \PHPStan\Type\Constant\ConstantStringType('LY'),
                            new \PHPStan\Type\Constant\ConstantStringType('LI'),
                            new \PHPStan\Type\Constant\ConstantStringType('LT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LU'),
                            new \PHPStan\Type\Constant\ConstantStringType('MO'),
                            new \PHPStan\Type\Constant\ConstantStringType('MK'),
                            new \PHPStan\Type\Constant\ConstantStringType('MG'),
                            new \PHPStan\Type\Constant\ConstantStringType('MW'),
                            new \PHPStan\Type\Constant\ConstantStringType('MY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MV'),
                            new \PHPStan\Type\Constant\ConstantStringType('ML'),
                            new \PHPStan\Type\Constant\ConstantStringType('MT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MH'),
                            new \PHPStan\Type\Constant\ConstantStringType('MQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('MR'),
                            new \PHPStan\Type\Constant\ConstantStringType('MU'),
                            new \PHPStan\Type\Constant\ConstantStringType('YT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MX'),
                            new \PHPStan\Type\Constant\ConstantStringType('FM'),
                            new \PHPStan\Type\Constant\ConstantStringType('MD'),
                            new \PHPStan\Type\Constant\ConstantStringType('MC'),
                            new \PHPStan\Type\Constant\ConstantStringType('MN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ME'),
                            new \PHPStan\Type\Constant\ConstantStringType('MS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MA'),
                            new \PHPStan\Type\Constant\ConstantStringType('MZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('MM'),
                            new \PHPStan\Type\Constant\ConstantStringType('NA'),
                            new \PHPStan\Type\Constant\ConstantStringType('NR'),
                            new \PHPStan\Type\Constant\ConstantStringType('NP'),
                            new \PHPStan\Type\Constant\ConstantStringType('NL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('NI'),
                            new \PHPStan\Type\Constant\ConstantStringType('NE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NG'),
                            new \PHPStan\Type\Constant\ConstantStringType('NU'),
                            new \PHPStan\Type\Constant\ConstantStringType('NF'),
                            new \PHPStan\Type\Constant\ConstantStringType('MP'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO'),
                            new \PHPStan\Type\Constant\ConstantStringType('OM'),
                            new \PHPStan\Type\Constant\ConstantStringType('PK'),
                            new \PHPStan\Type\Constant\ConstantStringType('PW'),
                            new \PHPStan\Type\Constant\ConstantStringType('PS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PA'),
                            new \PHPStan\Type\Constant\ConstantStringType('PG'),
                            new \PHPStan\Type\Constant\ConstantStringType('PY'),
                            new \PHPStan\Type\Constant\ConstantStringType('PE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PH'),
                            new \PHPStan\Type\Constant\ConstantStringType('PN'),
                            new \PHPStan\Type\Constant\ConstantStringType('PL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PR'),
                            new \PHPStan\Type\Constant\ConstantStringType('QA'),
                            new \PHPStan\Type\Constant\ConstantStringType('RE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RO'),
                            new \PHPStan\Type\Constant\ConstantStringType('RU'),
                            new \PHPStan\Type\Constant\ConstantStringType('RW'),
                            new \PHPStan\Type\Constant\ConstantStringType('BL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SH'),
                            new \PHPStan\Type\Constant\ConstantStringType('KN'),
                            new \PHPStan\Type\Constant\ConstantStringType('LC'),
                            new \PHPStan\Type\Constant\ConstantStringType('MF'),
                            new \PHPStan\Type\Constant\ConstantStringType('PM'),
                            new \PHPStan\Type\Constant\ConstantStringType('VC'),
                            new \PHPStan\Type\Constant\ConstantStringType('WS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SM'),
                            new \PHPStan\Type\Constant\ConstantStringType('ST'),
                            new \PHPStan\Type\Constant\ConstantStringType('SA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SN'),
                            new \PHPStan\Type\Constant\ConstantStringType('RS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SG'),
                            new \PHPStan\Type\Constant\ConstantStringType('SX'),
                            new \PHPStan\Type\Constant\ConstantStringType('SK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SI'),
                            new \PHPStan\Type\Constant\ConstantStringType('SB'),
                            new \PHPStan\Type\Constant\ConstantStringType('SO'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZA'),
                            new \PHPStan\Type\Constant\ConstantStringType('GS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ES'),
                            new \PHPStan\Type\Constant\ConstantStringType('LK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('SZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('SE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CH'),
                            new \PHPStan\Type\Constant\ConstantStringType('SY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TW'),
                            new \PHPStan\Type\Constant\ConstantStringType('TJ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('TH'),
                            new \PHPStan\Type\Constant\ConstantStringType('TL'),
                            new \PHPStan\Type\Constant\ConstantStringType('TG'),
                            new \PHPStan\Type\Constant\ConstantStringType('TK'),
                            new \PHPStan\Type\Constant\ConstantStringType('TO'),
                            new \PHPStan\Type\Constant\ConstantStringType('TT'),
                            new \PHPStan\Type\Constant\ConstantStringType('TN'),
                            new \PHPStan\Type\Constant\ConstantStringType('TR'),
                            new \PHPStan\Type\Constant\ConstantStringType('TM'),
                            new \PHPStan\Type\Constant\ConstantStringType('TC'),
                            new \PHPStan\Type\Constant\ConstantStringType('TV'),
                            new \PHPStan\Type\Constant\ConstantStringType('UG'),
                            new \PHPStan\Type\Constant\ConstantStringType('UA'),
                            new \PHPStan\Type\Constant\ConstantStringType('AE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('US'),
                            new \PHPStan\Type\Constant\ConstantStringType('UM'),
                            new \PHPStan\Type\Constant\ConstantStringType('UY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UZ'),
                            new \PHPStan\Type\Constant\ConstantStringType('VU'),
                            new \PHPStan\Type\Constant\ConstantStringType('VE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VG'),
                            new \PHPStan\Type\Constant\ConstantStringType('VI'),
                            new \PHPStan\Type\Constant\ConstantStringType('WF'),
                            new \PHPStan\Type\Constant\ConstantStringType('EH'),
                            new \PHPStan\Type\Constant\ConstantStringType('YE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZM'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZW'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getIPSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IPSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IPSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPSetDescriptors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getLoggingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoggingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDestinationConfigs'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedactedFields'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Data'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('URI'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUERY_STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                            new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                            new \PHPStan\Type\Constant\ConstantStringType('BODY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_QUERY_ARG'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL_QUERY_ARGS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getPermissionPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRateBasedRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchPredicates'),
                    new \PHPStan\Type\Constant\ConstantStringType('RateKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('RateLimit'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Negated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataId'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ByteMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('SqlInjectionMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('GeoMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('SizeConstraint'),
                            new \PHPStan\Type\Constant\ConstantStringType('XssMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('RegexMatch'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantStringType('IP'),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getRateBasedRuleManagedKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ManagedKeys'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRegexMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegexMatchSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RegexMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegexMatchTuples'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FieldToMatch'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextTransformation'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegexPatternSetId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('URI'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                                new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                                new \PHPStan\Type\Constant\ConstantStringType('BODY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SINGLE_QUERY_ARG'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL_QUERY_ARGS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPRESS_WHITE_SPACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTML_ENTITY_DECODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOWERCASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CMD_LINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL_DECODE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getRegexPatternSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegexPatternSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RegexPatternSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegexPatternStrings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rule'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Predicates'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Negated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataId'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ByteMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('SqlInjectionMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('GeoMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('SizeConstraint'),
                            new \PHPStan\Type\Constant\ConstantStringType('XssMatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('RegexMatch'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getRuleGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RuleGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getSampledRequests(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SampledRequests'),
                new \PHPStan\Type\Constant\ConstantStringType('PopulationSize'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeWindow'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Request'),
                    new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleWithinRuleGroup'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ClientIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('URI'),
                        new \PHPStan\Type\Constant\ConstantStringType('Method'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getSizeConstraintSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SizeConstraintSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SizeConstraintSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('SizeConstraints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FieldToMatch'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextTransformation'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('URI'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                                new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                                new \PHPStan\Type\Constant\ConstantStringType('BODY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SINGLE_QUERY_ARG'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL_QUERY_ARGS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPRESS_WHITE_SPACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTML_ENTITY_DECODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOWERCASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CMD_LINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL_DECODE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('NE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LT'),
                            new \PHPStan\Type\Constant\ConstantStringType('GE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GT'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getSqlInjectionMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SqlInjectionMatchSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SqlInjectionMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('SqlInjectionMatchTuples'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FieldToMatch'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextTransformation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('URI'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                                new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                                new \PHPStan\Type\Constant\ConstantStringType('BODY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SINGLE_QUERY_ARG'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL_QUERY_ARGS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPRESS_WHITE_SPACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTML_ENTITY_DECODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOWERCASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CMD_LINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL_DECODE'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getWebACL(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WebACL'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebACLArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('OverrideAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludedRules'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGULAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('RATE_BASED'),
                            new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getWebACLForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WebACLSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getXssMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('XssMatchSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('XssMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('XssMatchTuples'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FieldToMatch'),
                        new \PHPStan\Type\Constant\ConstantStringType('TextTransformation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Data'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('URI'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                                new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                                new \PHPStan\Type\Constant\ConstantStringType('BODY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SINGLE_QUERY_ARG'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL_QUERY_ARGS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPRESS_WHITE_SPACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTML_ENTITY_DECODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOWERCASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CMD_LINE'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL_DECODE'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listActivatedRulesInRuleGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('ActivatedRules'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('OverrideAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExcludedRules'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BLOCK'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGULAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('RATE_BASED'),
                        new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function listByteMatchSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('ByteMatchSets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ByteMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listGeoMatchSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('GeoMatchSets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GeoMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listIPSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('IPSets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IPSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listLoggingConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoggingConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDestinationConfigs'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedactedFields'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Data'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('URI'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUERY_STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                            new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                            new \PHPStan\Type\Constant\ConstantStringType('BODY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_QUERY_ARG'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL_QUERY_ARGS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRateBasedRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listRegexMatchSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('RegexMatchSets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RegexMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listRegexPatternSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('RegexPatternSets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RegexPatternSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listResourcesForWebACL(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArns'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listRuleGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listSizeConstraintSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('SizeConstraintSets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SizeConstraintSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listSqlInjectionMatchSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('SqlInjectionMatchSets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SqlInjectionMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listSubscribedRuleGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('RuleGroups'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('TagInfoForResource'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listWebACLs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('WebACLs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listXssMatchSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('XssMatchSets'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('XssMatchSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function putLoggingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoggingConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogDestinationConfigs'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedactedFields'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Data'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('URI'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUERY_STRING'),
                            new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                            new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                            new \PHPStan\Type\Constant\ConstantStringType('BODY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE_QUERY_ARG'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL_QUERY_ARGS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function putPermissionPolicy(): ?\PHPStan\Type\Type
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
    private function updateByteMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateGeoMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateIPSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRateBasedRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRegexMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRegexPatternSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRuleGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSizeConstraintSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateSqlInjectionMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateWebACL(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateXssMatchSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}