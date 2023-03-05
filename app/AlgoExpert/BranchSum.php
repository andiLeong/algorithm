<?php

namespace App\AlgoExpert;

use App\Utility\Tree;

class BranchSum
{

    public static function sum(Tree $tree)
    {
        $sum = [];
        static::calculate($tree, 0, $sum);
        return $sum;
    }

    public static function calculate($node, $sum, &$sums)
    {
        if (is_null($node)) {
            return;
        }

        $newSum = $sum + $node->value;
        if (is_null($node->left) && is_null($node->right)) {
            $sums[] = $newSum;
            return;
        }

        static::calculate($node->left, $newSum, $sums);
        static::calculate($node->right, $newSum, $sums);
    }

}