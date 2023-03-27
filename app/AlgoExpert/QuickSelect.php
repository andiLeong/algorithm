<?php

namespace App\AlgoExpert;

use App\Utility\Arr;

class QuickSelect
{
    public static function find($arr, $k)
    {
        $right = sizeof($arr) - 1;
        $index = self::quickSort($arr, $k - 1, 0, $right);
        return $arr[$index];
    }

    private static function quickSort(&$arr, $targetIndex, $start, $end)
    {
        while (true) {
            $pivot = $start;
            $left = $start + 1;
            $right = $end;

            while ($right >= $left) {
                if ($arr[$left] > $arr[$pivot] && $arr[$right] < $arr[$pivot]) {
                    Arr::swap($left, $right, $arr);
                }

                if ($arr[$left] <= $arr[$pivot]) {
                    $left++;
                }

                if ($arr[$pivot] <= $arr[$right]) {
                    $right--;
                }
            }
            Arr::swap($pivot, $right, $arr);


            if ($right === $targetIndex) {
                return $targetIndex;
            } elseif ($right > $targetIndex) {
                //explode the left of pivot
                $end = $right - 1;
            } elseif ($right < $targetIndex) {
                //explode the right of pivot
                $start = $right + 1;
            }
        }

    }
}