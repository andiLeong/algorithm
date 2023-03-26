<?php

namespace App\AlgoExpert;

class SearchForRange
{
    public static function search($arr, $target)
    {

        $start = 0;
        $end = sizeof($arr) - 1;
        $middle = floor(($start + $end) / 2);

        while ($start <= $end) {
            $number = $arr[$middle];

            if ($number === $target) {
                $left = $middle - 1;
                $right = $middle + 1;

                while (isset($arr[$left])) {
                    if ($arr[$left] !== $target) {
                        break;
                    }
                    $left--;
                }

                while (isset($arr[$right])) {
                    if ($arr[$right] !== $target) {
                        break;
                    }
                    $right++;
                }

                return [(int)$left + 1, (int)$right - 1];
            } elseif ($number < $target) {
                $start = $middle + 1;
            } else {
                $end = $middle - 1;
            }


            $middle = floor(($start + $end) / 2);
        }

        return [-1, -1];
    }
}