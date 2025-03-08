<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class HealthLakeClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\HealthLake\HealthLakeClient>
     */
    public function getClass(): string
    {
        return \Aws\HealthLake\HealthLakeClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createFHIRDatastore',
            'deleteFHIRDatastore',
            'describeFHIRDatastore',
            'describeFHIRExportJob',
            'describeFHIRImportJob',
            'listFHIRDatastores',
            'listFHIRExportJobs',
            'listFHIRImportJobs',
            'listTagsForResource',
            'startFHIRExportJob',
            'startFHIRImportJob',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createFHIRDatastore' => $this->createFHIRDatastore(),
            'deleteFHIRDatastore' => $this->deleteFHIRDatastore(),
            'describeFHIRDatastore' => $this->describeFHIRDatastore(),
            'describeFHIRExportJob' => $this->describeFHIRExportJob(),
            'describeFHIRImportJob' => $this->describeFHIRImportJob(),
            'listFHIRDatastores' => $this->listFHIRDatastores(),
            'listFHIRExportJobs' => $this->listFHIRExportJobs(),
            'listFHIRImportJobs' => $this->listFHIRImportJobs(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startFHIRExportJob' => $this->startFHIRExportJob(),
            'startFHIRImportJob' => $this->startFHIRImportJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function createFHIRDatastore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatastoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('DatastoreArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DatastoreStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DatastoreEndpoint'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteFHIRDatastore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatastoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('DatastoreArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DatastoreStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DatastoreEndpoint'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeFHIRDatastore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatastoreProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreTypeVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SseConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreloadDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCause'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('R4'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsEncryptionConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CmkType'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED_KMS_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PreloadDataType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('SYNTHEA'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AuthorizationStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('FineGrainedAuthorizationEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdpLambdaArn'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMART_ON_FHIR_V1'),
                            new \PHPStan\Type\Constant\ConstantStringType('SMART_ON_FHIR'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_AUTH'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCategory'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYABLE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('NON_RETRYABLE_ERROR'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeFHIRExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExportJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ERRORS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Configuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeFHIRImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImportJobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobOutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobProgressReport'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ERRORS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Configuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfScannedFiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalSizeOfScannedFilesInMB'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfImportedFiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfResourcesScanned'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfResourcesImported'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfResourcesWithCustomerError'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfFilesReadWithCustomerError'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throughput'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listFHIRDatastores(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatastorePropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreTypeVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('SseConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreloadDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCause'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('R4'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KmsEncryptionConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CmkType'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED_KMS_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_KMS_KEY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PreloadDataType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('SYNTHEA'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AuthorizationStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('FineGrainedAuthorizationEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdpLambdaArn'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMART_ON_FHIR_V1'),
                            new \PHPStan\Type\Constant\ConstantStringType('SMART_ON_FHIR'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_AUTH'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCategory'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RETRYABLE_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('NON_RETRYABLE_ERROR'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFHIRExportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExportJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ERRORS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Configuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFHIRImportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ImportJobPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatastoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobOutputDataConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobProgressReport'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ERRORS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCEL_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Configuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Uri'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfScannedFiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalSizeOfScannedFilesInMB'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfImportedFiles'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfResourcesScanned'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfResourcesImported'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfResourcesWithCustomerError'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfFilesReadWithCustomerError'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throughput'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function startFHIRExportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DatastoreId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ERRORS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startFHIRImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DatastoreId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ERRORS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCEL_FAILED'),
                ]),
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
}