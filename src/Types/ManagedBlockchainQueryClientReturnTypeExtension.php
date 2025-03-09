<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ManagedBlockchainQueryClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ManagedBlockchainQuery\ManagedBlockchainQueryClient>
     */
    public function getClass(): string
    {
        return \Aws\ManagedBlockchainQuery\ManagedBlockchainQueryClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchGetTokenBalance',
            'getAssetContract',
            'getTokenBalance',
            'getTransaction',
            'listAssetContracts',
            'listFilteredTransactionEvents',
            'listTokenBalances',
            'listTransactionEvents',
            'listTransactions',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchGetTokenBalance' => $this->batchGetTokenBalance(),
            'getAssetContract' => $this->getAssetContract(),
            'getTokenBalance' => $this->getTokenBalance(),
            'getTransaction' => $this->getTransaction(),
            'listAssetContracts' => $this->listAssetContracts(),
            'listFilteredTransactionEvents' => $this->listFilteredTransactionEvents(),
            'listTokenBalances' => $this->listTokenBalances(),
            'listTransactionEvents' => $this->listTransactionEvents(),
            'listTransactions' => $this->listTransactions(),
        };
    }
    private function batchGetTokenBalance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tokenBalances'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ownerIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('tokenIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('balance'),
                        new \PHPStan\Type\Constant\ConstantStringType('atBlockchainInstant'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('address'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('network'),
                            new \PHPStan\Type\Constant\ConstantStringType('contractAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('tokenId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_MAINNET'),
                                new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_SEPOLIA_TESTNET'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_MAINNET'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_TESTNET'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('time'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('time'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('tokenIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('atBlockchainInstant'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('network'),
                            new \PHPStan\Type\Constant\ConstantStringType('contractAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('tokenId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_MAINNET'),
                                new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_SEPOLIA_TESTNET'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_MAINNET'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_TESTNET'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('address'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('time'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getAssetContract(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contractIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('tokenStandard'),
                new \PHPStan\Type\Constant\ConstantStringType('deployerAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('network'),
                    new \PHPStan\Type\Constant\ConstantStringType('contractAddress'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_MAINNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_SEPOLIA_TESTNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_MAINNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_TESTNET'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ERC20'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERC721'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERC1155'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('symbol'),
                    new \PHPStan\Type\Constant\ConstantStringType('decimals'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getTokenBalance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ownerIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('tokenIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('balance'),
                new \PHPStan\Type\Constant\ConstantStringType('atBlockchainInstant'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('address'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('network'),
                    new \PHPStan\Type\Constant\ConstantStringType('contractAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('tokenId'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_MAINNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_SEPOLIA_TESTNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_MAINNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_TESTNET'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('time'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('time'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getTransaction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('transaction'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('network'),
                    new \PHPStan\Type\Constant\ConstantStringType('blockHash'),
                    new \PHPStan\Type\Constant\ConstantStringType('transactionHash'),
                    new \PHPStan\Type\Constant\ConstantStringType('blockNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('transactionTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('transactionIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfTransactions'),
                    new \PHPStan\Type\Constant\ConstantStringType('to'),
                    new \PHPStan\Type\Constant\ConstantStringType('from'),
                    new \PHPStan\Type\Constant\ConstantStringType('contractAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('gasUsed'),
                    new \PHPStan\Type\Constant\ConstantStringType('cumulativeGasUsed'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveGasPrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('signatureV'),
                    new \PHPStan\Type\Constant\ConstantStringType('signatureR'),
                    new \PHPStan\Type\Constant\ConstantStringType('signatureS'),
                    new \PHPStan\Type\Constant\ConstantStringType('transactionFee'),
                    new \PHPStan\Type\Constant\ConstantStringType('transactionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('confirmationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionStatus'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_MAINNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_SEPOLIA_TESTNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_MAINNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_TESTNET'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FINAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONFINAL'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listAssetContracts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contracts'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contractIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('tokenStandard'),
                        new \PHPStan\Type\Constant\ConstantStringType('deployerAddress'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('network'),
                            new \PHPStan\Type\Constant\ConstantStringType('contractAddress'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_MAINNET'),
                                new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_SEPOLIA_TESTNET'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_MAINNET'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_TESTNET'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ERC20'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERC721'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERC1155'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFilteredTransactionEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('events'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('network'),
                        new \PHPStan\Type\Constant\ConstantStringType('transactionHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('from'),
                        new \PHPStan\Type\Constant\ConstantStringType('to'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('contractAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('tokenId'),
                        new \PHPStan\Type\Constant\ConstantStringType('transactionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('voutIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('voutSpent'),
                        new \PHPStan\Type\Constant\ConstantStringType('spentVoutTransactionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('spentVoutTransactionHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('spentVoutIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('blockchainInstant'),
                        new \PHPStan\Type\Constant\ConstantStringType('confirmationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_MAINNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_SEPOLIA_TESTNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_MAINNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_TESTNET'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ERC20_TRANSFER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERC20_MINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERC20_BURN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERC20_DEPOSIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERC20_WITHDRAWAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERC721_TRANSFER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERC1155_TRANSFER'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_VIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_VOUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ETH_TRANSFER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETH_TRANSFER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('time'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONFINAL'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTokenBalances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tokenBalances'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ownerIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('tokenIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('balance'),
                        new \PHPStan\Type\Constant\ConstantStringType('atBlockchainInstant'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('address'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('network'),
                            new \PHPStan\Type\Constant\ConstantStringType('contractAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('tokenId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_MAINNET'),
                                new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_SEPOLIA_TESTNET'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_MAINNET'),
                                new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_TESTNET'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('time'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('time'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTransactionEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('events'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('network'),
                        new \PHPStan\Type\Constant\ConstantStringType('transactionHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('from'),
                        new \PHPStan\Type\Constant\ConstantStringType('to'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('contractAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('tokenId'),
                        new \PHPStan\Type\Constant\ConstantStringType('transactionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('voutIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('voutSpent'),
                        new \PHPStan\Type\Constant\ConstantStringType('spentVoutTransactionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('spentVoutTransactionHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('spentVoutIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('blockchainInstant'),
                        new \PHPStan\Type\Constant\ConstantStringType('confirmationStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_MAINNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_SEPOLIA_TESTNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_MAINNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_TESTNET'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ERC20_TRANSFER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERC20_MINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERC20_BURN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERC20_DEPOSIT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERC20_WITHDRAWAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERC721_TRANSFER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERC1155_TRANSFER'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_VIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_VOUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ETH_TRANSFER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETH_TRANSFER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('time'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONFINAL'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTransactions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('transactions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('transactionHash'),
                        new \PHPStan\Type\Constant\ConstantStringType('transactionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('network'),
                        new \PHPStan\Type\Constant\ConstantStringType('transactionTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('confirmationStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_MAINNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('ETHEREUM_SEPOLIA_TESTNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_MAINNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITCOIN_TESTNET'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONFINAL'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}