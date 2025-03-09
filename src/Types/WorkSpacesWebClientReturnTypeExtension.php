<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class WorkSpacesWebClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\WorkSpacesWeb\WorkSpacesWebClient>
     */
    public function getClass(): string
    {
        return \Aws\WorkSpacesWeb\WorkSpacesWebClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateBrowserSettings',
            'associateDataProtectionSettings',
            'associateIpAccessSettings',
            'associateNetworkSettings',
            'associateTrustStore',
            'associateUserAccessLoggingSettings',
            'associateUserSettings',
            'createBrowserSettings',
            'createDataProtectionSettings',
            'createIdentityProvider',
            'createIpAccessSettings',
            'createNetworkSettings',
            'createPortal',
            'createTrustStore',
            'createUserAccessLoggingSettings',
            'createUserSettings',
            'deleteBrowserSettings',
            'deleteDataProtectionSettings',
            'deleteIdentityProvider',
            'deleteIpAccessSettings',
            'deleteNetworkSettings',
            'deletePortal',
            'deleteTrustStore',
            'deleteUserAccessLoggingSettings',
            'deleteUserSettings',
            'disassociateBrowserSettings',
            'disassociateDataProtectionSettings',
            'disassociateIpAccessSettings',
            'disassociateNetworkSettings',
            'disassociateTrustStore',
            'disassociateUserAccessLoggingSettings',
            'disassociateUserSettings',
            'expireSession',
            'getBrowserSettings',
            'getDataProtectionSettings',
            'getIdentityProvider',
            'getIpAccessSettings',
            'getNetworkSettings',
            'getPortal',
            'getPortalServiceProviderMetadata',
            'getSession',
            'getTrustStore',
            'getTrustStoreCertificate',
            'getUserAccessLoggingSettings',
            'getUserSettings',
            'listBrowserSettings',
            'listDataProtectionSettings',
            'listIdentityProviders',
            'listIpAccessSettings',
            'listNetworkSettings',
            'listPortals',
            'listSessions',
            'listTagsForResource',
            'listTrustStoreCertificates',
            'listTrustStores',
            'listUserAccessLoggingSettings',
            'listUserSettings',
            'tagResource',
            'untagResource',
            'updateBrowserSettings',
            'updateDataProtectionSettings',
            'updateIdentityProvider',
            'updateIpAccessSettings',
            'updateNetworkSettings',
            'updatePortal',
            'updateTrustStore',
            'updateUserAccessLoggingSettings',
            'updateUserSettings',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateBrowserSettings' => $this->associateBrowserSettings(),
            'associateDataProtectionSettings' => $this->associateDataProtectionSettings(),
            'associateIpAccessSettings' => $this->associateIpAccessSettings(),
            'associateNetworkSettings' => $this->associateNetworkSettings(),
            'associateTrustStore' => $this->associateTrustStore(),
            'associateUserAccessLoggingSettings' => $this->associateUserAccessLoggingSettings(),
            'associateUserSettings' => $this->associateUserSettings(),
            'createBrowserSettings' => $this->createBrowserSettings(),
            'createDataProtectionSettings' => $this->createDataProtectionSettings(),
            'createIdentityProvider' => $this->createIdentityProvider(),
            'createIpAccessSettings' => $this->createIpAccessSettings(),
            'createNetworkSettings' => $this->createNetworkSettings(),
            'createPortal' => $this->createPortal(),
            'createTrustStore' => $this->createTrustStore(),
            'createUserAccessLoggingSettings' => $this->createUserAccessLoggingSettings(),
            'createUserSettings' => $this->createUserSettings(),
            'deleteBrowserSettings' => $this->deleteBrowserSettings(),
            'deleteDataProtectionSettings' => $this->deleteDataProtectionSettings(),
            'deleteIdentityProvider' => $this->deleteIdentityProvider(),
            'deleteIpAccessSettings' => $this->deleteIpAccessSettings(),
            'deleteNetworkSettings' => $this->deleteNetworkSettings(),
            'deletePortal' => $this->deletePortal(),
            'deleteTrustStore' => $this->deleteTrustStore(),
            'deleteUserAccessLoggingSettings' => $this->deleteUserAccessLoggingSettings(),
            'deleteUserSettings' => $this->deleteUserSettings(),
            'disassociateBrowserSettings' => $this->disassociateBrowserSettings(),
            'disassociateDataProtectionSettings' => $this->disassociateDataProtectionSettings(),
            'disassociateIpAccessSettings' => $this->disassociateIpAccessSettings(),
            'disassociateNetworkSettings' => $this->disassociateNetworkSettings(),
            'disassociateTrustStore' => $this->disassociateTrustStore(),
            'disassociateUserAccessLoggingSettings' => $this->disassociateUserAccessLoggingSettings(),
            'disassociateUserSettings' => $this->disassociateUserSettings(),
            'expireSession' => $this->expireSession(),
            'getBrowserSettings' => $this->getBrowserSettings(),
            'getDataProtectionSettings' => $this->getDataProtectionSettings(),
            'getIdentityProvider' => $this->getIdentityProvider(),
            'getIpAccessSettings' => $this->getIpAccessSettings(),
            'getNetworkSettings' => $this->getNetworkSettings(),
            'getPortal' => $this->getPortal(),
            'getPortalServiceProviderMetadata' => $this->getPortalServiceProviderMetadata(),
            'getSession' => $this->getSession(),
            'getTrustStore' => $this->getTrustStore(),
            'getTrustStoreCertificate' => $this->getTrustStoreCertificate(),
            'getUserAccessLoggingSettings' => $this->getUserAccessLoggingSettings(),
            'getUserSettings' => $this->getUserSettings(),
            'listBrowserSettings' => $this->listBrowserSettings(),
            'listDataProtectionSettings' => $this->listDataProtectionSettings(),
            'listIdentityProviders' => $this->listIdentityProviders(),
            'listIpAccessSettings' => $this->listIpAccessSettings(),
            'listNetworkSettings' => $this->listNetworkSettings(),
            'listPortals' => $this->listPortals(),
            'listSessions' => $this->listSessions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTrustStoreCertificates' => $this->listTrustStoreCertificates(),
            'listTrustStores' => $this->listTrustStores(),
            'listUserAccessLoggingSettings' => $this->listUserAccessLoggingSettings(),
            'listUserSettings' => $this->listUserSettings(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateBrowserSettings' => $this->updateBrowserSettings(),
            'updateDataProtectionSettings' => $this->updateDataProtectionSettings(),
            'updateIdentityProvider' => $this->updateIdentityProvider(),
            'updateIpAccessSettings' => $this->updateIpAccessSettings(),
            'updateNetworkSettings' => $this->updateNetworkSettings(),
            'updatePortal' => $this->updatePortal(),
            'updateTrustStore' => $this->updateTrustStore(),
            'updateUserAccessLoggingSettings' => $this->updateUserAccessLoggingSettings(),
            'updateUserSettings' => $this->updateUserSettings(),
        };
    }
    private function associateBrowserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('browserSettingsArn'),
                new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateDataProtectionSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataProtectionSettingsArn'),
                new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateIpAccessSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ipAccessSettingsArn'),
                new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateNetworkSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('networkSettingsArn'),
                new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateTrustStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
                new \PHPStan\Type\Constant\ConstantStringType('trustStoreArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateUserAccessLoggingSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
                new \PHPStan\Type\Constant\ConstantStringType('userAccessLoggingSettingsArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function associateUserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
                new \PHPStan\Type\Constant\ConstantStringType('userSettingsArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createBrowserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('browserSettingsArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDataProtectionSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataProtectionSettingsArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createIdentityProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('identityProviderArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createIpAccessSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ipAccessSettingsArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createNetworkSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('networkSettingsArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPortal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
                new \PHPStan\Type\Constant\ConstantStringType('portalEndpoint'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTrustStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('trustStoreArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createUserAccessLoggingSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userAccessLoggingSettingsArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createUserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userSettingsArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteBrowserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDataProtectionSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteIdentityProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteIpAccessSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteNetworkSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePortal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTrustStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteUserAccessLoggingSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteUserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateBrowserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateDataProtectionSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateIpAccessSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateNetworkSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateTrustStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateUserAccessLoggingSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateUserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function expireSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getBrowserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('browserSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalEncryptionContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedPortalArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('browserPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('browserSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerManagedKey'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDataProtectionSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataProtectionSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalEncryptionContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedPortalArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerManagedKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataProtectionSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('inlineRedactionConfiguration'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('globalConfidenceLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('globalEnforcedUrls'),
                        new \PHPStan\Type\Constant\ConstantStringType('globalExemptUrls'),
                        new \PHPStan\Type\Constant\ConstantStringType('inlineRedactionPatterns'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('builtInPatternId'),
                            new \PHPStan\Type\Constant\ConstantStringType('confidenceLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('customPattern'),
                            new \PHPStan\Type\Constant\ConstantStringType('enforcedUrls'),
                            new \PHPStan\Type\Constant\ConstantStringType('exemptUrls'),
                            new \PHPStan\Type\Constant\ConstantStringType('redactionPlaceHolder'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('keywordRegex'),
                                new \PHPStan\Type\Constant\ConstantStringType('patternDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('patternName'),
                                new \PHPStan\Type\Constant\ConstantStringType('patternRegex'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('redactionPlaceHolderText'),
                                new \PHPStan\Type\Constant\ConstantStringType('redactionPlaceHolderType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomText'),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getIdentityProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('identityProvider'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identityProviderArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('identityProviderDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('identityProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('identityProviderType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('Facebook'),
                        new \PHPStan\Type\Constant\ConstantStringType('Google'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoginWithAmazon'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignInWithApple'),
                        new \PHPStan\Type\Constant\ConstantStringType('OIDC'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getIpAccessSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ipAccessSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalEncryptionContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedPortalArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerManagedKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAccessSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipRules'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipRange'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getNetworkSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('networkSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associatedPortalArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getPortal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('portal'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalEncryptionContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('browserSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('browserType'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerManagedKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataProtectionSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAccessSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxConcurrentSessions'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('portalEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('portalStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('rendererType'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('trustStoreArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('userAccessLoggingSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('userSettingsArn'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_Identity_Center'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('Chrome'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('standard.regular'),
                        new \PHPStan\Type\Constant\ConstantStringType('standard.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('standard.xlarge'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Incomplete'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('AppStream'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getPortalServiceProviderMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceProviderSamlMetadata'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('session'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clientIpAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('username'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getTrustStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('trustStore'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associatedPortalArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('trustStoreArn'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getTrustStoreCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                new \PHPStan\Type\Constant\ConstantStringType('trustStoreArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('body'),
                    new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                    new \PHPStan\Type\Constant\ConstantStringType('notValidAfter'),
                    new \PHPStan\Type\Constant\ConstantStringType('notValidBefore'),
                    new \PHPStan\Type\Constant\ConstantStringType('subject'),
                    new \PHPStan\Type\Constant\ConstantStringType('thumbprint'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getUserAccessLoggingSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userAccessLoggingSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associatedPortalArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('kinesisStreamArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('userAccessLoggingSettingsArn'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getUserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalEncryptionContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedPortalArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('cookieSynchronizationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('copyAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerManagedKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('deepLinkAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('disconnectTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('downloadAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('idleDisconnectTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('pasteAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('printAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('toolbarConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('uploadAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('userSettingsArn'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowlist'),
                        new \PHPStan\Type\Constant\ConstantStringType('blocklist'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domain'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domain'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('hiddenToolbarItems'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxDisplayResolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('toolbarType'),
                        new \PHPStan\Type\Constant\ConstantStringType('visualMode'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                            new \PHPStan\Type\Constant\ConstantStringType('DualMonitor'),
                            new \PHPStan\Type\Constant\ConstantStringType('FullScreen'),
                            new \PHPStan\Type\Constant\ConstantStringType('Webcam'),
                            new \PHPStan\Type\Constant\ConstantStringType('Microphone'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('size4096X2160'),
                            new \PHPStan\Type\Constant\ConstantStringType('size3840X2160'),
                            new \PHPStan\Type\Constant\ConstantStringType('size3440X1440'),
                            new \PHPStan\Type\Constant\ConstantStringType('size2560X1440'),
                            new \PHPStan\Type\Constant\ConstantStringType('size1920X1080'),
                            new \PHPStan\Type\Constant\ConstantStringType('size1280X720'),
                            new \PHPStan\Type\Constant\ConstantStringType('size1024X768'),
                            new \PHPStan\Type\Constant\ConstantStringType('size800X600'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Floating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Docked'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Dark'),
                            new \PHPStan\Type\Constant\ConstantStringType('Light'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listBrowserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('browserSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('browserSettingsArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDataProtectionSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataProtectionSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataProtectionSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIdentityProviders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('identityProviders'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identityProviderArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('identityProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('identityProviderType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('Facebook'),
                        new \PHPStan\Type\Constant\ConstantStringType('Google'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoginWithAmazon'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignInWithApple'),
                        new \PHPStan\Type\Constant\ConstantStringType('OIDC'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIpAccessSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ipAccessSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAccessSettingsArn'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNetworkSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('networkSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('networkSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPortals(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('portals'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('browserSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('browserType'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataProtectionSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAccessSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxConcurrentSessions'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('portalEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('portalStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('rendererType'),
                    new \PHPStan\Type\Constant\ConstantStringType('trustStoreArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('userAccessLoggingSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('userSettingsArn'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_Identity_Center'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('Chrome'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('standard.regular'),
                        new \PHPStan\Type\Constant\ConstantStringType('standard.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('standard.xlarge'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Incomplete'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('AppStream'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listSessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('sessions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('username'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terminated'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listTrustStoreCertificates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('certificateList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('trustStoreArn'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                    new \PHPStan\Type\Constant\ConstantStringType('notValidAfter'),
                    new \PHPStan\Type\Constant\ConstantStringType('notValidBefore'),
                    new \PHPStan\Type\Constant\ConstantStringType('subject'),
                    new \PHPStan\Type\Constant\ConstantStringType('thumbprint'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTrustStores(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('trustStores'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('trustStoreArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listUserAccessLoggingSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('userAccessLoggingSettings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kinesisStreamArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('userAccessLoggingSettingsArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listUserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('userSettings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cookieSynchronizationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('copyAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('deepLinkAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('disconnectTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('downloadAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('idleDisconnectTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('pasteAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('printAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('toolbarConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('uploadAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('userSettingsArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowlist'),
                        new \PHPStan\Type\Constant\ConstantStringType('blocklist'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domain'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domain'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('hiddenToolbarItems'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxDisplayResolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('toolbarType'),
                        new \PHPStan\Type\Constant\ConstantStringType('visualMode'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                            new \PHPStan\Type\Constant\ConstantStringType('DualMonitor'),
                            new \PHPStan\Type\Constant\ConstantStringType('FullScreen'),
                            new \PHPStan\Type\Constant\ConstantStringType('Webcam'),
                            new \PHPStan\Type\Constant\ConstantStringType('Microphone'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('size4096X2160'),
                            new \PHPStan\Type\Constant\ConstantStringType('size3840X2160'),
                            new \PHPStan\Type\Constant\ConstantStringType('size3440X1440'),
                            new \PHPStan\Type\Constant\ConstantStringType('size2560X1440'),
                            new \PHPStan\Type\Constant\ConstantStringType('size1920X1080'),
                            new \PHPStan\Type\Constant\ConstantStringType('size1280X720'),
                            new \PHPStan\Type\Constant\ConstantStringType('size1024X768'),
                            new \PHPStan\Type\Constant\ConstantStringType('size800X600'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Floating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Docked'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Dark'),
                            new \PHPStan\Type\Constant\ConstantStringType('Light'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
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
    private function updateBrowserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('browserSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalEncryptionContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedPortalArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('browserPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('browserSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerManagedKey'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateDataProtectionSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataProtectionSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalEncryptionContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedPortalArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerManagedKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataProtectionSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('inlineRedactionConfiguration'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('globalConfidenceLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('globalEnforcedUrls'),
                        new \PHPStan\Type\Constant\ConstantStringType('globalExemptUrls'),
                        new \PHPStan\Type\Constant\ConstantStringType('inlineRedactionPatterns'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('builtInPatternId'),
                            new \PHPStan\Type\Constant\ConstantStringType('confidenceLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('customPattern'),
                            new \PHPStan\Type\Constant\ConstantStringType('enforcedUrls'),
                            new \PHPStan\Type\Constant\ConstantStringType('exemptUrls'),
                            new \PHPStan\Type\Constant\ConstantStringType('redactionPlaceHolder'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('keywordRegex'),
                                new \PHPStan\Type\Constant\ConstantStringType('patternDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('patternName'),
                                new \PHPStan\Type\Constant\ConstantStringType('patternRegex'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('redactionPlaceHolderText'),
                                new \PHPStan\Type\Constant\ConstantStringType('redactionPlaceHolderType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomText'),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateIdentityProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('identityProvider'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identityProviderArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('identityProviderDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('identityProviderName'),
                    new \PHPStan\Type\Constant\ConstantStringType('identityProviderType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        new \PHPStan\Type\Constant\ConstantStringType('Facebook'),
                        new \PHPStan\Type\Constant\ConstantStringType('Google'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoginWithAmazon'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignInWithApple'),
                        new \PHPStan\Type\Constant\ConstantStringType('OIDC'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateIpAccessSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ipAccessSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalEncryptionContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedPortalArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerManagedKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAccessSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipRules'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipRange'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateNetworkSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('networkSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associatedPortalArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updatePortal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('portal'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalEncryptionContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('browserSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('browserType'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerManagedKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataProtectionSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAccessSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxConcurrentSessions'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('portalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('portalEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('portalStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('rendererType'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('trustStoreArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('userAccessLoggingSettingsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('userSettingsArn'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Standard'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_Identity_Center'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('Chrome'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('standard.regular'),
                        new \PHPStan\Type\Constant\ConstantStringType('standard.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('standard.xlarge'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Incomplete'),
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('AppStream'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateTrustStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('trustStoreArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateUserAccessLoggingSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userAccessLoggingSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associatedPortalArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('kinesisStreamArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('userAccessLoggingSettingsArn'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateUserSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('additionalEncryptionContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedPortalArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('cookieSynchronizationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('copyAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerManagedKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('deepLinkAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('disconnectTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('downloadAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('idleDisconnectTimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('pasteAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('printAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('toolbarConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('uploadAllowed'),
                    new \PHPStan\Type\Constant\ConstantStringType('userSettingsArn'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('allowlist'),
                        new \PHPStan\Type\Constant\ConstantStringType('blocklist'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domain'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domain'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('hiddenToolbarItems'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxDisplayResolution'),
                        new \PHPStan\Type\Constant\ConstantStringType('toolbarType'),
                        new \PHPStan\Type\Constant\ConstantStringType('visualMode'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                            new \PHPStan\Type\Constant\ConstantStringType('DualMonitor'),
                            new \PHPStan\Type\Constant\ConstantStringType('FullScreen'),
                            new \PHPStan\Type\Constant\ConstantStringType('Webcam'),
                            new \PHPStan\Type\Constant\ConstantStringType('Microphone'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('size4096X2160'),
                            new \PHPStan\Type\Constant\ConstantStringType('size3840X2160'),
                            new \PHPStan\Type\Constant\ConstantStringType('size3440X1440'),
                            new \PHPStan\Type\Constant\ConstantStringType('size2560X1440'),
                            new \PHPStan\Type\Constant\ConstantStringType('size1920X1080'),
                            new \PHPStan\Type\Constant\ConstantStringType('size1280X720'),
                            new \PHPStan\Type\Constant\ConstantStringType('size1024X768'),
                            new \PHPStan\Type\Constant\ConstantStringType('size800X600'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Floating'),
                            new \PHPStan\Type\Constant\ConstantStringType('Docked'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Dark'),
                            new \PHPStan\Type\Constant\ConstantStringType('Light'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}