<?php

namespace App\AlgoExpert;

class ThreeLargestNumber
{
    public static function find($arr)
    {
        $result = [];

//        for ($i = 0; $i < sizeof($arr); $i++) {
//            $current = $arr[$i];
//            if ($result[2] === null || $current > $result[2]) {
//                self::shift($result, $current, 2);
//            } elseif ($result[1] === null || $current > $result[1]) {
//                self::shift($result, $current, 1);
//            } elseif ($result[0] === null || $current > $result[0]) {
//                self::shift($result, $current, 0);
//            }
//        }
//
//        return $result;

        for ($x = 0; $x < 3; $x++) {

            $largest = $arr[0];
            $largestIndex = 0;

            for ($i = 0; $i < sizeof($arr) - 1; $i++) {
                $current = $arr[$i];
                $next = $arr[$i + 1];

                if ($current <= $next && $next > $largest) {
                    $largest = $next;
                    $largestIndex = $i + 1;
                } elseif ($current > $largest) {
                    $largest = $current;
                    $largestIndex = $i;
                }
            }

            array_unshift($result, $largest);
            $arr[$largestIndex] = PHP_INT_MIN;
        }

        return $result;
    }

    private static function shift(array &$arr, mixed $value, int $index)
    {
        for ($i = 0; $i <= $index; $i++) {
            if ($i === $index) {
                $arr[$i] = $value;
            } else {
                $arr[$i] = $arr[$i + 1];
            }
        }
    }
}