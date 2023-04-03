<?php

namespace App\AlgoExpert;

class LargestNumberOfSum
{
    public static function sum($arr, $target)
    {
        sort($arr);
        $size = sizeof($arr);
        $lastIndex = $size - 1;
        for ($i = 0; $i < $size; $i++) {
            $numberNeeded = $target === $arr[$i] ? 1 : $target - $arr[$i] + 2;
            for ($x = $lastIndex; $x >= 0; $x--) {
                if ($arr[$x] < $numberNeeded) {
                    return $arr[$lastIndex] + $arr[$lastIndex - 1];
                }
            }
        }

        return -1;
    }
}