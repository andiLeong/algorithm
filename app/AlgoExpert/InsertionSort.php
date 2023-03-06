<?php

namespace App\AlgoExpert;

class InsertionSort
{
    public static function sort(&$arr)
    {
        for ($i = 1; $i < count($arr); $i++) {
            $j = $i;
            while ($j > 0 && $arr[$j] < $arr[$j -1]){
                self::swap($j, $j -1, $arr);
                $j -= 1;
            }
        }
    }

    private static function swap(int $i, int $j, &$arr)
    {
        $tem = $arr[$j];
        $arr[$j] = $arr[$i];
        $arr[$i] = $tem;
    }
}