<?php

namespace App\Leetcode;

use App\Utility\Arr;

class MergeSortedArray
{
    public static function merge(array &$arr, $arrCount, $arr2, $arr2Count)
    {
        $new = [];
        if(Arr::size($arr) !== $arrCount){
            for ($x = 0; $x < $arrCount; $x++) {
                $new[] = $arr[$x];
            }
        }else{
            $new = $arr;
        }

        $arr = array_merge($new , $arr2);
        sort($arr);
    }
}