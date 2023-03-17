<?php

namespace App\AlgoExpert;

use App\Utility\Arr;

class SelectionSort
{

    /**
     * selection sort basically keep track of the smallest index
     * swap them if needed in each for loop iteration
     * after the loop all the value will be correctly sorted
     * https://www.geeksforgeeks.org/selection-sort/
     *
     * @param $arr
     */
    public static function sort(&$arr)
    {
        $size = count($arr);
        for ($i = 0; $i < $size - 1; $i++) {

            $minIndex = $i;
            for ($nextIndex = $i + 1; $nextIndex < $size; $nextIndex++) {
                if ($arr[$minIndex] > $arr[$nextIndex]) {
                    $minIndex = $nextIndex;
                }
            }

            if ($arr[$minIndex] < $arr[$i]) {
                Arr::swap($i, $minIndex, $arr);
            }
        }
    }

}