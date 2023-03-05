<?php

namespace App\AlgoExpert;

use App\Utility\Tree;

class DepthSum
{

    public static function sum(Tree $tree)
    {
        //iterate
        $sum = 0;
        $stack = [
            ['node' => $tree, 'depth' => 0]
        ];

        while (count($stack) > 0) {
            $item = array_pop($stack);
            $node = $item['node'];
            $depth = $item['depth'];

            if (is_null($node)) {
                continue;
            }

            $sum += $depth;

            $stack[] = [
                'node' => $node->left,
                'depth' => $depth + 1,
            ];

            $stack[] = [
                'node' => $node->right,
                'depth' => $depth + 1,
            ];
        }


        return $sum;

        //recusive
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