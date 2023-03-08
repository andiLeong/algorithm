<?php

namespace App\AlgoExpert;

use App\Utility\Arr;

class QuickSort
{
    /**
     * algorithm of quick sort is get a pivot index,
     * on the left of the index is smaller than pivot
     * on the right is larger than pivot
     * repeat the process for the left and right array
     *
     * steps to implement quick sort
     * 1, set 3 pointer , left, right, pivot.
     * to start the left,pivot is o, right is the last value of the array
     * 2, write a while loop,
     * when pivot and left is the same compare pivot with right value
     * if pivot is larger than thr right swap them else move the right towards the left
     * do the same comparison with pivot and left, when both left and right and pivot are the same
     * stop the loop
     *
     * 3, repeat the process for the left/right side of the array
     * https://www.geeksforgeeks.org/quick-sort/
     * @param $arr
     */
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