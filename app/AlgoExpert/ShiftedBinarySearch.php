<?php

namespace App\AlgoExpert;

class ShiftedBinarySearch
{
    public static function search($arr, $target)
    {
        $left = 0;
        $right = sizeof($arr) - 1;

        while ($left <= $right) {
            $middle = floor(($left + $right) / 2);

            $middleValue = $arr[$middle];
            $leftValue = $arr[$left];
            $rightValue = $arr[$right];

            if ($middleValue === $target) {
                return (int)$middle;
            }

            if ($middleValue >= $leftValue) {
                if ($target < $middleValue && $target >= $leftValue) {
                    $right = $middle - 1;
                } else {
                    $left = $middle + 1;
                }
            } else {
                if ($target > $middleValue && $target <= $rightValue) {
                    $left = $middle + 1;
                } else {
                    $right = $middle - 1;
                }
            }

        }

        return -1;

    }
}