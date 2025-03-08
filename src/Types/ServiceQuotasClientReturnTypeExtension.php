<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ServiceQuotasClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ServiceQuotas\ServiceQuotasClient>
     */
    public function getClass(): string
    {
        return \Aws\ServiceQuotas\ServiceQuotasClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateServiceQuotaTemplate',
            'deleteServiceQuotaIncreaseRequestFromTemplate',
            'disassociateServiceQuotaTemplate',
            'getAWSDefaultServiceQuota',
            'getAssociationForServiceQuotaTemplate',
            'getRequestedServiceQuotaChange',
            'getServiceQuota',
            'getServiceQuotaIncreaseRequestFromTemplate',
            'listAWSDefaultServiceQuotas',
            'listRequestedServiceQuotaChangeHistory',
            'listRequestedServiceQuotaChangeHistoryByQuota',
            'listServiceQuotaIncreaseRequestsInTemplate',
            'listServiceQuotas',
            'listServices',
            'listTagsForResource',
            'putServiceQuotaIncreaseRequestIntoTemplate',
            'requestServiceQuotaIncrease',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateServiceQuotaTemplate' => $this->associateServiceQuotaTemplate(),
            'deleteServiceQuotaIncreaseRequestFromTemplate' => $this->deleteServiceQuotaIncreaseRequestFromTemplate(),
            'disassociateServiceQuotaTemplate' => $this->disassociateServiceQuotaTemplate(),
            'getAWSDefaultServiceQuota' => $this->getAWSDefaultServiceQuota(),
            'getAssociationForServiceQuotaTemplate' => $this->getAssociationForServiceQuotaTemplate(),
            'getRequestedServiceQuotaChange' => $this->getRequestedServiceQuotaChange(),
            'getServiceQuota' => $this->getServiceQuota(),
            'getServiceQuotaIncreaseRequestFromTemplate' => $this->getServiceQuotaIncreaseRequestFromTemplate(),
            'listAWSDefaultServiceQuotas' => $this->listAWSDefaultServiceQuotas(),
            'listRequestedServiceQuotaChangeHistory' => $this->listRequestedServiceQuotaChangeHistory(),
            'listRequestedServiceQuotaChangeHistoryByQuota' => $this->listRequestedServiceQuotaChangeHistoryByQuota(),
            'listServiceQuotaIncreaseRequestsInTemplate' => $this->listServiceQuotaIncreaseRequestsInTemplate(),
            'listServiceQuotas' => $this->listServiceQuotas(),
            'listServices' => $this->listServices(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putServiceQuotaIncreaseRequestIntoTemplate' => $this->putServiceQuotaIncreaseRequestIntoTemplate(),
            'requestServiceQuotaIncrease' => $this->requestServiceQuotaIncrease(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function associateServiceQuotaTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteServiceQuotaIncreaseRequestFromTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateServiceQuotaTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAWSDefaultServiceQuota(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Quota'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('Adjustable'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageMetric'),
                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaAppliedAtLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaContext'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MetricNamespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricDimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricStatisticRecommendation'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodUnit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MICROSECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('MILLISECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEEK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_ACCESS_DENIED_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_THROTTLING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_NOT_AVAILABLE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScope'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScopeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAssociationForServiceQuotaTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceQuotaTemplateAssociationStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATED'),
                ]),
            ]),
        ]);
    }
    private function getRequestedServiceQuotaChange(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestedQuota'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Requester'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaRequestedAtLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaContext'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CASE_OPENED'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CASE_CLOSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_REQUEST'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScope'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScopeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getServiceQuota(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Quota'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('Adjustable'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageMetric'),
                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaAppliedAtLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaContext'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MetricNamespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricDimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricStatisticRecommendation'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodUnit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MICROSECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('MILLISECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEEK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_ACCESS_DENIED_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_THROTTLING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_NOT_AVAILABLE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScope'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScopeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getServiceQuotaIncreaseRequestFromTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceQuotaIncreaseRequestInTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalQuota'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function listAWSDefaultServiceQuotas(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Quotas'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('Adjustable'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageMetric'),
                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaAppliedAtLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaContext'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MetricNamespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricDimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricStatisticRecommendation'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodUnit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MICROSECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('MILLISECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEEK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_ACCESS_DENIED_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_THROTTLING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_NOT_AVAILABLE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScope'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScopeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listRequestedServiceQuotaChangeHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestedQuotas'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Requester'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaRequestedAtLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaContext'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CASE_OPENED'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CASE_CLOSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_REQUEST'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScope'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScopeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listRequestedServiceQuotaChangeHistoryByQuota(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestedQuotas'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Requester'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaRequestedAtLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaContext'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CASE_OPENED'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CASE_CLOSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_REQUEST'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScope'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScopeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listServiceQuotaIncreaseRequestsInTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceQuotaIncreaseRequestInTemplateList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalQuota'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServiceQuotas(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Quotas'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('Adjustable'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageMetric'),
                    new \PHPStan\Type\Constant\ConstantStringType('Period'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaAppliedAtLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaContext'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MetricNamespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricDimensions'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricStatisticRecommendation'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeriodUnit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MICROSECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('MILLISECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('MINUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HOUR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEEK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_ACCESS_DENIED_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_THROTTLING_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_SERVICE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_NOT_AVAILABLE_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScope'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScopeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listServices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Services'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
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
    private function putServiceQuotaIncreaseRequestIntoTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceQuotaIncreaseRequestInTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalQuota'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function requestServiceQuotaIncrease(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestedQuota'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CaseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Requester'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalQuota'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaRequestedAtLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('QuotaContext'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CASE_OPENED'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CASE_CLOSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_APPROVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_REQUEST'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScope'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextScopeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContextId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}