<?php

namespace App\AlgoExpert;

use App\Utility\Arr;

class QuickSort
{
    public static function sort(&$arr)
    {
        static::toSort(0, count($arr) - 1, $arr);
    }

    public static function toSort($left, $right, &$arr)
    {
        if ($left < $right) {
            $pivot = static::partition($left, $right, $arr);
            static::toSort($left, $pivot - 1, $arr);
            static::toSort($pivot + 1, $right, $arr);
        }
    }

    public static function partition($left, $right, &$arr)
    {
        $pivot = $left;

        while (true) {

            if ($pivot === $left) {
                //move the right towards to left
                if ($arr[$pivot] > $arr[$right]) {
                    Arr::swap($pivot, $right, $arr);
                    $pivot = $right;
                } else {
                    $right--;
                }
            } else if ($pivot === $right) {
                //move the left towards to right
                if ($arr[$left] > $arr[$pivot]) {
                    Arr::swap($pivot, $left, $arr);
                    $pivot = $left;
                } else {
                    $left++;
                }
            }

            if ($pivot === $left && $pivot === $right) {
                break;
            }
        }

        return $pivot;
    }

}