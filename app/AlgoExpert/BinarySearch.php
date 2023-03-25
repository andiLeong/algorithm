<?php

namespace App\AlgoExpert;

class BinarySearch
{
    public static function search($arr, $target)
    {
        $left = 0;
        $right = sizeof($arr) - 1;
        $middle = floor(($left + $right) / 2);

        while ($left <= $right) {
            $number = $arr[$middle];

            if ($number > $target) {
                $right = $middle - 1;
            } elseif ($number < $target) {
                $left = $middle + 1;
            } else {
                return (int)$middle;
            }

            $middle = floor(($left + $right) / 2);
        }

        return -1;
    }
}