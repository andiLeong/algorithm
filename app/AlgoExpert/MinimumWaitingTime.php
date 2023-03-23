<?php

namespace App\AlgoExpert;

class MinimumWaitingTime
{
    public static function find($arr)
    {
        QuickSort::sort($arr);

        $sum = 0;
        $res = 0;
        for ($i = 0; $i < sizeof($arr); $i++) {
            $sum += $arr[$i];
            if ($i !== sizeof($arr) - 1) {
                $res += $sum;
            }

        }

        return $res;
    }
}