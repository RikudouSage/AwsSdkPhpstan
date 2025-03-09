<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ComprehendMedicalClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ComprehendMedical\ComprehendMedicalClient>
     */
    public function getClass(): string
    {
        return \Aws\ComprehendMedical\ComprehendMedicalClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'describeEntitiesDetectionV2Job',
            'describeICD10CMInferenceJob',
            'describePHIDetectionJob',
            'describeRxNormInferenceJob',
            'describeSNOMEDCTInferenceJob',
            'detectEntities',
            'detectEntitiesV2',
            'detectPHI',
            'inferICD10CM',
            'inferRxNorm',
            'inferSNOMEDCT',
            'listEntitiesDetectionV2Jobs',
            'listICD10CMInferenceJobs',
            'listPHIDetectionJobs',
            'listRxNormInferenceJobs',
            'listSNOMEDCTInferenceJobs',
            'startEntitiesDetectionV2Job',
            'startICD10CMInferenceJob',
            'startPHIDetectionJob',
            'startRxNormInferenceJob',
            'startSNOMEDCTInferenceJob',
            'stopEntitiesDetectionV2Job',
            'stopICD10CMInferenceJob',
            'stopPHIDetectionJob',
            'stopRxNormInferenceJob',
            'stopSNOMEDCTInferenceJob',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'describeEntitiesDetectionV2Job' => $this->describeEntitiesDetectionV2Job(),
            'describeICD10CMInferenceJob' => $this->describeICD10CMInferenceJob(),
            'describePHIDetectionJob' => $this->describePHIDetectionJob(),
            'describeRxNormInferenceJob' => $this->describeRxNormInferenceJob(),
            'describeSNOMEDCTInferenceJob' => $this->describeSNOMEDCTInferenceJob(),
            'detectEntities' => $this->detectEntities(),
            'detectEntitiesV2' => $this->detectEntitiesV2(),
            'detectPHI' => $this->detectPHI(),
            'inferICD10CM' => $this->inferICD10CM(),
            'inferRxNorm' => $this->inferRxNorm(),
            'inferSNOMEDCT' => $this->inferSNOMEDCT(),
            'listEntitiesDetectionV2Jobs' => $this->listEntitiesDetectionV2Jobs(),
            'listICD10CMInferenceJobs' => $this->listICD10CMInferenceJobs(),
            'listPHIDetectionJobs' => $this->listPHIDetectionJobs(),
            'listRxNormInferenceJobs' => $this->listRxNormInferenceJobs(),
            'listSNOMEDCTInferenceJobs' => $this->listSNOMEDCTInferenceJobs(),
            'startEntitiesDetectionV2Job' => $this->startEntitiesDetectionV2Job(),
            'startICD10CMInferenceJob' => $this->startICD10CMInferenceJob(),
            'startPHIDetectionJob' => $this->startPHIDetectionJob(),
            'startRxNormInferenceJob' => $this->startRxNormInferenceJob(),
            'startSNOMEDCTInferenceJob' => $this->startSNOMEDCTInferenceJob(),
            'stopEntitiesDetectionV2Job' => $this->stopEntitiesDetectionV2Job(),
            'stopICD10CMInferenceJob' => $this->stopICD10CMInferenceJob(),
            'stopPHIDetectionJob' => $this->stopPHIDetectionJob(),
            'stopRxNormInferenceJob' => $this->stopRxNormInferenceJob(),
            'stopSNOMEDCTInferenceJob' => $this->stopSNOMEDCTInferenceJob(),
        };
    }
    private function describeEntitiesDetectionV2Job(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ComprehendMedicalAsyncJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestFilePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('en'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeICD10CMInferenceJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ComprehendMedicalAsyncJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestFilePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('en'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describePHIDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ComprehendMedicalAsyncJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestFilePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('en'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeRxNormInferenceJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ComprehendMedicalAsyncJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestFilePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('en'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeSNOMEDCTInferenceJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ComprehendMedicalAsyncJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManifestFilePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('en'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function detectEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entities'),
                new \PHPStan\Type\Constant\ConstantStringType('UnmappedAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('PaginationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('Category'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Traits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MEDICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDICAL_CONDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_HEALTH_INFORMATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_TREATMENT_PROCEDURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANATOMY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BEHAVIORAL_ENVIRONMENTAL_SOCIAL'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DX_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOSAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROUTE_OR_MODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM'),
                            new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('GENERIC_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('BRAND_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRENGTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_UNITS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCEDURE_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TREATMENT_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTACT_POINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE_OR_FAX'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('IDENTIFIER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROFESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUANTITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_MEDICATION_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_DX_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TEST_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_PROCEDURE_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TREATMENT_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('GENDER'),
                            new \PHPStan\Type\Constant\ConstantStringType('RACE_ETHNICITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALLERGIES'),
                            new \PHPStan\Type\Constant\ConstantStringType('TOBACCO_USE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALCOHOL_CONSUMPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('REC_DRUG_USE'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SIGN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYMPTOM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSIS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NEGATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERTAINS_TO_FAMILY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HYPOTHETICAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW_CONFIDENCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAST_HISTORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FUTURE'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                new \PHPStan\Type\Constant\ConstantStringType('RelationshipScore'),
                                new \PHPStan\Type\Constant\ConstantStringType('RelationshipType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                new \PHPStan\Type\Constant\ConstantStringType('Category'),
                                new \PHPStan\Type\Constant\ConstantStringType('Traits'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DX_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOSAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_OR_MODE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FORM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DURATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GENERIC_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BRAND_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRENGTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNITS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCEDURE_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TREATMENT_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONTACT_POINT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PHONE_OR_FAX'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IDENTIFIER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROFESSION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUANTITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_MEDICATION_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_DX_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TEST_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_PROCEDURE_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TREATMENT_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AMOUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GENDER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RACE_ETHNICITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLERGIES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TOBACCO_USE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALCOHOL_CONSUMPTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REC_DRUG_USE'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EVERY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WITH_DOSAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ADMINISTERED_VIA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FOR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OVERLAP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOSAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_OR_MODE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FORM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DURATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRENGTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNITS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AMOUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDICATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDICAL_CONDITION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_HEALTH_INFORMATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_TREATMENT_PROCEDURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ANATOMY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BEHAVIORAL_ENVIRONMENTAL_SOCIAL'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SIGN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SYMPTOM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSIS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NEGATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PERTAINS_TO_FAMILY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HYPOTHETICAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW_CONFIDENCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PAST_HISTORY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FUTURE'),
                                        ]),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MEDICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDICAL_CONDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_HEALTH_INFORMATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_TREATMENT_PROCEDURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANATOMY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BEHAVIORAL_ENVIRONMENTAL_SOCIAL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Score'),
                            new \PHPStan\Type\Constant\ConstantStringType('RelationshipScore'),
                            new \PHPStan\Type\Constant\ConstantStringType('RelationshipType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Category'),
                            new \PHPStan\Type\Constant\ConstantStringType('Traits'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('DX_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOSAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROUTE_OR_MODE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORM'),
                                new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DURATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('GENERIC_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('BRAND_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRENGTH'),
                                new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_UNITS'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROCEDURE_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('TREATMENT_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACT_POINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PHONE_OR_FAX'),
                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('IDENTIFIER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROFESSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUANTITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_MEDICATION_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_DX_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TEST_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_PROCEDURE_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TREATMENT_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMOUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('GENDER'),
                                new \PHPStan\Type\Constant\ConstantStringType('RACE_ETHNICITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLERGIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('TOBACCO_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALCOHOL_CONSUMPTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('REC_DRUG_USE'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EVERY'),
                                new \PHPStan\Type\Constant\ConstantStringType('WITH_DOSAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ADMINISTERED_VIA'),
                                new \PHPStan\Type\Constant\ConstantStringType('FOR'),
                                new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERLAP'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOSAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROUTE_OR_MODE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORM'),
                                new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DURATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRENGTH'),
                                new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_UNITS'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMOUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('USAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MEDICATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDICAL_CONDITION'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_HEALTH_INFORMATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_TREATMENT_PROCEDURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANATOMY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEHAVIORAL_ENVIRONMENTAL_SOCIAL'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SIGN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SYMPTOM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSIS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NEGATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PERTAINS_TO_FAMILY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HYPOTHETICAL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LOW_CONFIDENCE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PAST_HISTORY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FUTURE'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function detectEntitiesV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entities'),
                new \PHPStan\Type\Constant\ConstantStringType('UnmappedAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('PaginationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('Category'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Traits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MEDICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDICAL_CONDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_HEALTH_INFORMATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_TREATMENT_PROCEDURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANATOMY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BEHAVIORAL_ENVIRONMENTAL_SOCIAL'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DX_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOSAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROUTE_OR_MODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM'),
                            new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('GENERIC_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('BRAND_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRENGTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_UNITS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCEDURE_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TREATMENT_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTACT_POINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE_OR_FAX'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('IDENTIFIER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROFESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUANTITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_MEDICATION_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_DX_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TEST_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_PROCEDURE_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TREATMENT_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('GENDER'),
                            new \PHPStan\Type\Constant\ConstantStringType('RACE_ETHNICITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALLERGIES'),
                            new \PHPStan\Type\Constant\ConstantStringType('TOBACCO_USE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALCOHOL_CONSUMPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('REC_DRUG_USE'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SIGN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYMPTOM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSIS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NEGATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERTAINS_TO_FAMILY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HYPOTHETICAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW_CONFIDENCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAST_HISTORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FUTURE'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                new \PHPStan\Type\Constant\ConstantStringType('RelationshipScore'),
                                new \PHPStan\Type\Constant\ConstantStringType('RelationshipType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                new \PHPStan\Type\Constant\ConstantStringType('Category'),
                                new \PHPStan\Type\Constant\ConstantStringType('Traits'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DX_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOSAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_OR_MODE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FORM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DURATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GENERIC_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BRAND_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRENGTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNITS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCEDURE_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TREATMENT_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONTACT_POINT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PHONE_OR_FAX'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IDENTIFIER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROFESSION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUANTITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_MEDICATION_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_DX_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TEST_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_PROCEDURE_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TREATMENT_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AMOUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GENDER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RACE_ETHNICITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLERGIES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TOBACCO_USE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALCOHOL_CONSUMPTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REC_DRUG_USE'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EVERY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WITH_DOSAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ADMINISTERED_VIA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FOR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OVERLAP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOSAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_OR_MODE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FORM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DURATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRENGTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNITS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AMOUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDICATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDICAL_CONDITION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_HEALTH_INFORMATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_TREATMENT_PROCEDURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ANATOMY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BEHAVIORAL_ENVIRONMENTAL_SOCIAL'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SIGN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SYMPTOM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSIS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NEGATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PERTAINS_TO_FAMILY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HYPOTHETICAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW_CONFIDENCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PAST_HISTORY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FUTURE'),
                                        ]),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MEDICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDICAL_CONDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_HEALTH_INFORMATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_TREATMENT_PROCEDURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANATOMY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BEHAVIORAL_ENVIRONMENTAL_SOCIAL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Score'),
                            new \PHPStan\Type\Constant\ConstantStringType('RelationshipScore'),
                            new \PHPStan\Type\Constant\ConstantStringType('RelationshipType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                            new \PHPStan\Type\Constant\ConstantStringType('Text'),
                            new \PHPStan\Type\Constant\ConstantStringType('Category'),
                            new \PHPStan\Type\Constant\ConstantStringType('Traits'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('DX_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOSAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROUTE_OR_MODE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORM'),
                                new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DURATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('GENERIC_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('BRAND_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRENGTH'),
                                new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_UNITS'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROCEDURE_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('TREATMENT_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONTACT_POINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PHONE_OR_FAX'),
                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('IDENTIFIER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROFESSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUANTITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_MEDICATION_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_DX_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TEST_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_PROCEDURE_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TREATMENT_NAME'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMOUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('GENDER'),
                                new \PHPStan\Type\Constant\ConstantStringType('RACE_ETHNICITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALLERGIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('TOBACCO_USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALCOHOL_CONSUMPTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('REC_DRUG_USE'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EVERY'),
                                new \PHPStan\Type\Constant\ConstantStringType('WITH_DOSAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ADMINISTERED_VIA'),
                                new \PHPStan\Type\Constant\ConstantStringType('FOR'),
                                new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('OVERLAP'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOSAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROUTE_OR_MODE'),
                                new \PHPStan\Type\Constant\ConstantStringType('FORM'),
                                new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DURATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('STRENGTH'),
                                new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_UNITS'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                                new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMOUNT'),
                                new \PHPStan\Type\Constant\ConstantStringType('USAGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MEDICATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDICAL_CONDITION'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_HEALTH_INFORMATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('TEST_TREATMENT_PROCEDURE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ANATOMY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('BEHAVIORAL_ENVIRONMENTAL_SOCIAL'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SIGN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SYMPTOM'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSIS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('NEGATION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PERTAINS_TO_FAMILY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HYPOTHETICAL'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LOW_CONFIDENCE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PAST_HISTORY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FUTURE'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function detectPHI(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entities'),
                new \PHPStan\Type\Constant\ConstantStringType('PaginationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('Category'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Traits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MEDICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MEDICAL_CONDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_HEALTH_INFORMATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_TREATMENT_PROCEDURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANATOMY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BEHAVIORAL_ENVIRONMENTAL_SOCIAL'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DX_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOSAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROUTE_OR_MODE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FORM'),
                            new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('DURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('GENERIC_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('BRAND_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRENGTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_UNITS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCEDURE_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TREATMENT_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTACT_POINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE_OR_FAX'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('IDENTIFIER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('URL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROFESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUANTITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_MEDICATION_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_DX_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TEST_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_PROCEDURE_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TREATMENT_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('GENDER'),
                            new \PHPStan\Type\Constant\ConstantStringType('RACE_ETHNICITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALLERGIES'),
                            new \PHPStan\Type\Constant\ConstantStringType('TOBACCO_USE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALCOHOL_CONSUMPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('REC_DRUG_USE'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SIGN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYMPTOM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSIS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NEGATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERTAINS_TO_FAMILY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HYPOTHETICAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW_CONFIDENCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAST_HISTORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FUTURE'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                new \PHPStan\Type\Constant\ConstantStringType('RelationshipScore'),
                                new \PHPStan\Type\Constant\ConstantStringType('RelationshipType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                new \PHPStan\Type\Constant\ConstantStringType('Category'),
                                new \PHPStan\Type\Constant\ConstantStringType('Traits'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DX_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOSAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_OR_MODE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FORM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DURATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GENERIC_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BRAND_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRENGTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNITS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROCEDURE_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TREATMENT_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONTACT_POINT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PHONE_OR_FAX'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IDENTIFIER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('URL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROFESSION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUANTITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_MEDICATION_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_DX_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TEST_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_PROCEDURE_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_TREATMENT_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AMOUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GENDER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RACE_ETHNICITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALLERGIES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TOBACCO_USE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALCOHOL_CONSUMPTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REC_DRUG_USE'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EVERY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WITH_DOSAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ADMINISTERED_VIA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FOR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OVERLAP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOSAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_OR_MODE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FORM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DURATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRENGTH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNITS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AMOUNT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('USAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDICATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDICAL_CONDITION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PROTECTED_HEALTH_INFORMATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_TREATMENT_PROCEDURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ANATOMY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BEHAVIORAL_ENVIRONMENTAL_SOCIAL'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SIGN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SYMPTOM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSIS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NEGATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PERTAINS_TO_FAMILY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HYPOTHETICAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW_CONFIDENCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PAST_HISTORY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FUTURE'),
                                        ]),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function inferICD10CM(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entities'),
                new \PHPStan\Type\Constant\ConstantStringType('PaginationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('Category'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Traits'),
                        new \PHPStan\Type\Constant\ConstantStringType('ICD10CMConcepts'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDICAL_CONDITION'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DX_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                new \PHPStan\Type\Constant\ConstantStringType('RelationshipScore'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                new \PHPStan\Type\Constant\ConstantStringType('Traits'),
                                new \PHPStan\Type\Constant\ConstantStringType('Category'),
                                new \PHPStan\Type\Constant\ConstantStringType('RelationshipType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUANTITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_TO_DX_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('NEGATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSIS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SIGN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SYMPTOM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PERTAINS_TO_FAMILY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HYPOTHETICAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW_CONFIDENCE'),
                                        ]),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DX_NAME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIME_EXPRESSION'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OVERLAP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NEGATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSIS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SIGN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYMPTOM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERTAINS_TO_FAMILY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HYPOTHETICAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW_CONFIDENCE'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function inferRxNorm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entities'),
                new \PHPStan\Type\Constant\ConstantStringType('PaginationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('Category'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Traits'),
                        new \PHPStan\Type\Constant\ConstantStringType('RxNormConcepts'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDICATION'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BRAND_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('GENERIC_NAME'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                new \PHPStan\Type\Constant\ConstantStringType('RelationshipScore'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                new \PHPStan\Type\Constant\ConstantStringType('Traits'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DOSAGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DURATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FORM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FREQUENCY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE_OR_MODE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('STRENGTH'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('NEGATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PAST_HISTORY'),
                                        ]),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NEGATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAST_HISTORY'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function inferSNOMEDCT(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entities'),
                new \PHPStan\Type\Constant\ConstantStringType('PaginationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('SNOMEDCTDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('Characters'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                        new \PHPStan\Type\Constant\ConstantStringType('Category'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                        new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Traits'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNOMEDCTConcepts'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MEDICAL_CONDITION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ANATOMY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_TREATMENT_PROCEDURE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DX_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TEST_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROCEDURE_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('TREATMENT_NAME'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Category'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                new \PHPStan\Type\Constant\ConstantStringType('RelationshipScore'),
                                new \PHPStan\Type\Constant\ConstantStringType('RelationshipType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('BeginOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                new \PHPStan\Type\Constant\ConstantStringType('Traits'),
                                new \PHPStan\Type\Constant\ConstantStringType('SNOMEDCTConcepts'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MEDICAL_CONDITION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ANATOMY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_TREATMENT_PROCEDURE'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACUITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUALITY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_VALUE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNITS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYSTEM_ORGAN_SITE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TEST_UNIT'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('NEGATION'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSIS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SIGN'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SYMPTOM'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PERTAINS_TO_FAMILY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HYPOTHETICAL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('LOW_CONFIDENCE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PAST_HISTORY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FUTURE'),
                                        ]),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Score'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NEGATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIAGNOSIS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SIGN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SYMPTOM'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PERTAINS_TO_FAMILY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HYPOTHETICAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LOW_CONFIDENCE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PAST_HISTORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FUTURE'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Score'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Edition'),
                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OriginalTextCharacters'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function listEntitiesDetectionV2Jobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ComprehendMedicalAsyncJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestFilePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listICD10CMInferenceJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ComprehendMedicalAsyncJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestFilePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPHIDetectionJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ComprehendMedicalAsyncJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestFilePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRxNormInferenceJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ComprehendMedicalAsyncJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestFilePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSNOMEDCTInferenceJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ComprehendMedicalAsyncJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('LanguageCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManifestFilePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMSKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModelVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3Key'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startEntitiesDetectionV2Job(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startICD10CMInferenceJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startPHIDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startRxNormInferenceJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startSNOMEDCTInferenceJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopEntitiesDetectionV2Job(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopICD10CMInferenceJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopPHIDetectionJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopRxNormInferenceJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopSNOMEDCTInferenceJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}