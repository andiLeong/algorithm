<?php

namespace App\AlgoExpert;

class ZeroSumSubarray
{
    public static function contain($arr): bool
    {
        $size = sizeof($arr);
        $currentSum = 0;
        $sums = [0];

        for ($i = 0; $i < $size; $i++) {
            $current = $arr[$i];
            $currentSum += $current;

            if (in_array($currentSum, $sums) || $current === 0) {
                return true;
            }

            $sums[] = $currentSum;
        }

        return false;
    }
}