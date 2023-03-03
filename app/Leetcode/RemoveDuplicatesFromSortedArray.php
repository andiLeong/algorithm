<?php

namespace App\Leetcode;

use App\Utility\Arr;

class RemoveDuplicatesFromSortedArray
{

    public static function remove(&$arr)
    {
        $unique = Arr::unique($arr);
        $uniqueLength = Arr::size($unique);

        for ($x = 1; $x <= Arr::size($arr) - $uniqueLength; $x++) {
            $unique[] = '_';
        }

        $arr = array_values($unique);
//        dump($arr);
        return $uniqueLength;
    }
}