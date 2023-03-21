<?php

namespace App\AlgoExpert;

class MinRewards
{
    public static function find($arr)
    {
        $size = sizeof($arr);
        $sums = array_fill(0, $size, 1);

        // loop through from the left/right increase it as it goes
        // when number is going uptrend
        for ($i = 0; $i < $size - 1; $i++) {
            $current = $arr[$i];
            $next = $arr[$i + 1];

            if ($next > $current) {
                $sums[$i + 1] = max($sums[$i + 1], $sums[$i] + 1);
            }
        }

        for ($i = $size - 1; $i >= 1; $i--) {
            $current = $arr[$i];
            $next = $arr[$i - 1];
            if ($next > $current) {
                $sums[$i - 1] = max($sums[$i - 1], $sums[$i] + 1);
            }
        }

        return array_sum($sums);

        //find the local min solution
        $sums = array_fill(0, $size, 0);
        $minIndex = [];

        for ($i = 0; $i < $size; $i++) {
            $current = $arr[$i];
            $next = $arr[$i + 1] ?? null;
            $previous = $arr[$i - 1] ?? null;

            if ($i === $size - 1 && $current < $previous) {
                $minIndex[] = $i;
            } elseif ($i === 0 && $current < $next) {
                $minIndex[] = $i;
            } elseif ($current < $previous && $current < $next) {
                $minIndex[] = $i;
            }
        }

        if ($size === 1) {
            $minIndex = [0];
        }

        //explore min index to left and right
        for ($i = 0; $i < sizeof($minIndex); $i++) {

            $min = $minIndex[$i];
            $leftIndex = $min - 1;
            $rightIndex = $min + 1;
            $sums[$min] = 1;

            //going to the left
            while (isset($arr[$leftIndex]) && $arr[$leftIndex] > $arr[$leftIndex + 1]) {
                $sums[$leftIndex] = max($sums[$leftIndex], $sums[$leftIndex + 1] + 1);
                $leftIndex--;
            }

            //going to the right
            while (isset($arr[$rightIndex]) && $arr[$rightIndex] > $arr[$rightIndex - 1]) {
                $sums[$rightIndex] = $sums[$rightIndex - 1] + 1;
                $rightIndex++;
            }
        }

        return array_sum($sums);
    }

}