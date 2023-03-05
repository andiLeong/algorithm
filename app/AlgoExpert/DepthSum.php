<?php

namespace App\AlgoExpert;

use App\Utility\Tree;

class DepthSum
{

    public static function sum(Tree $tree)
    {
        $sum = 0;
        static::calculate($tree, $sum, 0);
        return $sum;
    }

    public static function calculate($node, &$sums, $depth)
    {
        if (is_null($node)) {
            return;
        }

        $sums = $sums + $depth;
        if (is_null($node->left) && is_null($node->right)) {
            return;
        }

        static::calculate($node->left, $sums, $depth + 1);
        static::calculate($node->right, $sums, $depth + 1);
    }

}