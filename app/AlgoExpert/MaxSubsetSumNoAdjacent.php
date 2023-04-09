<?php

namespace App\AlgoExpert;

class MaxSubsetSumNoAdjacent
{
    public static function calculate($arr)
    {
        if (empty($arr)) {
            return 0;
        }

        if (count($arr) === 1) {
            return $arr[0];
        }

        $sum = [];
        $sum[0] = $arr[0];
        $sum[1] = max($arr[0], $arr[1]);

        for ($i = 2; $i < sizeof($arr); $i++) {
            $sum[$i] = max($sum[$i - 1], $arr[$i] + $sum[$i - 2]);
        }

        return max($sum);
    }
}