<?php

namespace App\AlgoExpert;

class ThreeNumberSort
{
    public static function sort(&$arr, $order)
    {
        //official clever solution
        $size = sizeof($arr);
        $start = 0;
        $middle = 0;
        $end = $size - 1;

        while ($middle < $end) {
            $value = $arr[$middle];

            if ($value === $order[0]) {
                $current = $arr[$start];
                $arr[$start] = $arr[$middle];
                $arr[$middle] = $current;

                $start++;
                $middle++;
            } else if ($value === $order[1]) {
                $middle++;
            } else {
                $current = $arr[$end];
                $arr[$end] = $arr[$middle];
                $arr[$middle] = $current;
                $end -= 1;
            }
        }

        return ;
        // my solution
        $size = sizeof($arr);
        $end = $size - 1;
        $start = 0;
        $middleCount = 0;

        for ($i = 0; $i < $size; $i++) {
            if ($order[0] === $arr[$i]) {
                //you are in first group
                $arr[$start] = $arr[$i];
                $start++;

            } else if ($order[2] === $arr[$i]) {
                //you are last
                $arr[$end] = $arr[$i];
                $end--;
            } else {
                //you are middle
                $middleCount++;
            }
        }

        for ($i = $start; $i < $middleCount + $start; $i++) {
            $arr[$i] = $order[1];
        }
    }
}