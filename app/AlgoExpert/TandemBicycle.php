<?php

namespace App\AlgoExpert;

class TandemBicycle
{
    public static function pair($arr, $arr2, $fastest = true)
    {
        if (empty($arr) || empty($arr2)) {
            return 0;
        }

        QuickSort::sort($arr);
        QuickSort::sort($arr2);

        $sum = 0;
        if (min($arr) <= min($arr2)) {
            $minArray = $arr;
            $maxArray = $arr2;
        } else {
            $minArray = $arr2;
            $maxArray = $arr;
        }

        for ($i = 0; $i < sizeof($arr); $i++) {
            $end = $fastest === true ? $maxArray[sizeof($arr) - $i - 1] : $maxArray[$i];
            $sum += max($minArray[$i], $end);
        }

        return $sum;
    }
}