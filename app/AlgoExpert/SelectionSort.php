<?php

namespace App\AlgoExpert;

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
        for ($i = 0; $i < $size; $i++) {

            if($i === $size - 1){
                break;
            }

            $minIndex = $i;
            $nextIndex = $i + 1;

            while (isset($arr[$nextIndex])) {
                if ($arr[$minIndex] > $arr[$nextIndex]) {
                    $minIndex = $nextIndex;
                }
                $nextIndex++;
            }

            if ($arr[$minIndex] < $arr[$i]) {
                $current = $arr[$i];
                $arr[$i] = $arr[$minIndex];
                $arr[$minIndex] = $current;
            }
        }
    }

}