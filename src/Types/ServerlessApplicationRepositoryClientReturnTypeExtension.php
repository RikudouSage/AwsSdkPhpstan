<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ServerlessApplicationRepositoryClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ServerlessApplicationRepository\ServerlessApplicationRepositoryClient>
     */
    public function getClass(): string
    {
        return \Aws\ServerlessApplicationRepository\ServerlessApplicationRepositoryClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createApplication',
            'createApplicationVersion',
            'createCloudFormationChangeSet',
            'createCloudFormationTemplate',
            'deleteApplication',
            'getApplication',
            'getApplicationPolicy',
            'getCloudFormationTemplate',
            'listApplicationDependencies',
            'listApplicationVersions',
            'listApplications',
            'putApplicationPolicy',
            'unshareApplication',
            'updateApplication',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createApplication' => $this->createApplication(),
            'createApplicationVersion' => $this->createApplicationVersion(),
            'createCloudFormationChangeSet' => $this->createCloudFormationChangeSet(),
            'createCloudFormationTemplate' => $this->createCloudFormationTemplate(),
            'deleteApplication' => $this->deleteApplication(),
            'getApplication' => $this->getApplication(),
            'getApplicationPolicy' => $this->getApplicationPolicy(),
            'getCloudFormationTemplate' => $this->getCloudFormationTemplate(),
            'listApplicationDependencies' => $this->listApplicationDependencies(),
            'listApplicationVersions' => $this->listApplicationVersions(),
            'listApplications' => $this->listApplications(),
            'putApplicationPolicy' => $this->putApplicationPolicy(),
            'unshareApplication' => $this->unshareApplication(),
            'updateApplication' => $this->updateApplication(),
        };
    }
    private function createApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Author'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('HomePageUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('IsVerifiedAuthor'),
                new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ReadmeUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('SpdxLicenseId'),
                new \PHPStan\Type\Constant\ConstantStringType('VerifiedAuthorUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequiredCapabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourcesSupported'),
                    new \PHPStan\Type\Constant\ConstantStringType('SemanticVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCodeArchiveUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCodeUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedPattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConstraintDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoEcho'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReferencedByResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_NAMED_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_AUTO_EXPAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_RESOURCE_POLICY'),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createApplicationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ParameterDefinitions'),
                new \PHPStan\Type\Constant\ConstantStringType('RequiredCapabilities'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourcesSupported'),
                new \PHPStan\Type\Constant\ConstantStringType('SemanticVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceCodeArchiveUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceCodeUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateUrl'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedPattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConstraintDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxLength'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinLength'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('NoEcho'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReferencedByResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_NAMED_IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_AUTO_EXPAND'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_RESOURCE_POLICY'),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCloudFormationChangeSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('SemanticVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('StackId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCloudFormationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SemanticVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateId'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateUrl'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Author'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('HomePageUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('IsVerifiedAuthor'),
                new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ReadmeUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('SpdxLicenseId'),
                new \PHPStan\Type\Constant\ConstantStringType('VerifiedAuthorUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequiredCapabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourcesSupported'),
                    new \PHPStan\Type\Constant\ConstantStringType('SemanticVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCodeArchiveUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCodeUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedPattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConstraintDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoEcho'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReferencedByResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_NAMED_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_AUTO_EXPAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_RESOURCE_POLICY'),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getApplicationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Statements'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrincipalOrgIDs'),
                    new \PHPStan\Type\Constant\ConstantStringType('Principals'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatementId'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getCloudFormationTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SemanticVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateId'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateUrl'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PREPARING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listApplicationDependencies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Dependencies'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SemanticVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listApplicationVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Versions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SemanticVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCodeUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Applications'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Author'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomePageUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('SpdxLicenseId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putApplicationPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Statements'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrincipalOrgIDs'),
                    new \PHPStan\Type\Constant\ConstantStringType('Principals'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatementId'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function unshareApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Author'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('HomePageUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('IsVerifiedAuthor'),
                new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ReadmeUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('SpdxLicenseId'),
                new \PHPStan\Type\Constant\ConstantStringType('VerifiedAuthorUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterDefinitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequiredCapabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourcesSupported'),
                    new \PHPStan\Type\Constant\ConstantStringType('SemanticVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCodeArchiveUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceCodeUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedPattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConstraintDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoEcho'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReferencedByResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_NAMED_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_AUTO_EXPAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_RESOURCE_POLICY'),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}