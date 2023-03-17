<?php

namespace App\AlgoExpert;

class ThreeNumberSum
{
    public static function sum($arr, $target)
    {
        QuickSort::sort($arr);
        $size = sizeof($arr);
        $result = [];

        for ($i = 0; $i < $size; $i++) {
            $left = $i + 1;
            $right = $size - 1;
            $current = $arr[$i];

            while ($right > $left) {

                $sum = $arr[$left] + $arr[$right] + $current;
                if ($sum > $target) {
                    $right--;
                } elseif ($sum < $target) {
                    $left++;
                } else {
                    $result[] = [$current, $arr[$left], $arr[$right]];
                    $left++;
                    $right--;
                }
            }
        }

        return $result;
    }
}