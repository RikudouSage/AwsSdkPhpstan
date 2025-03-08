<?php

namespace Rikudou\AwsSdkPhpstan\Generator;

use PhpParser\Node\Expr\Array_;
use PhpParser\PrettyPrinter\Standard;

/**
 * @internal
 */
final class PrettyPrinter extends Standard
{
    protected function pExpr_Array(Array_ $node): string
    {
        if ($node->items === []) {
            return '[]';
        }

        return '['
            . $this->pCommaSeparatedMultiline($node->items, true)
            . $this->nl
            . ']';
    }
}
