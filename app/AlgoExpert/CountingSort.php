<?php

namespace App\AlgoExpert;

use App\Utility\NumberArr;

class CountingSort
{
    /**
     * step to implements counting sort
     * 1, ini a new count array with range with min and max with value of 0
     * 2, count each origin array value and update its to count array
     * 3, get to accumulate value for each count array value
     * 4, finally correct all the sorting position
     * https://www.programiz.com/dsa/counting-sort
     * @param $arr
     */
    public static function sort(&$arr)
    {
        $max = NumberArr::make($arr)->largest();
        $min = NumberArr::make($arr)->smallest();
        $count = [];
        $new = $arr;

        //ini count array with all zero
        for ($i = $min; $i < $max + 1; $i++) {
            $count[$i] = 0;
        }

        //count each array value to count array
        for ($i = 0; $i < sizeof($arr); $i++) {
            $value = $arr[$i];
            $count[$value] ++;
        }

        //reset count array with accumulate count;
        $accumulateCount = 0;
        for ($i = $min; $i < $max + 1; $i++) {
            $accumulateCount += $count[$i];
            $count[$i] = $accumulateCount;
        }

        //assign the correct sorting to new array
        for ($i = 0; $i < sizeof($arr); $i++) {
            $value = $arr[$i];
            $key = $count[$value] - 1;
            $new[$key] = $value;
            $count[$value]--;
        }

        $arr = $new;
    }
    
}