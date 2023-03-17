<?php

namespace App\AlgoExpert;

use App\Utility\Arr;

class SubarraySort
{
    public static function find($arr)
    {
        $size = sizeof($arr);
        $min = PHP_INT_MAX;
        $max = PHP_INT_MIN;
        $result = [-1, -1];

        for ($i = 0; $i < $size; $i++) {
            $previous = $arr[$i - 1] ?? null;
            $next = $arr[$i + 1] ?? null;
            $current = $arr[$i];

            if (!is_null($previous) && $current < $previous) {
                $min = min($min, $current);
            }

            if (!is_null($next) && $current > $next) {
                $max = max($max, $current);
            }
        }

        for ($i = 0; $i < $size; $i++) {
            if ($arr[$i] > $min) {
                $result[0] = $i;
                break;
            }
        }

        for ($i = $size - 1; $i >= 0; $i--) {
            if ($arr[$i] < $max) {
                $result[1] = $i;
                break;
            }
        }

        return $result;

        //selection sort method
        $result = [-1, -1];

        for ($i = 0; $i < $size; $i++) {

            $minIndex = $i;

            for ($x = $i + 1; $x < $size; $x++) {
                if ($arr[$x] < $arr[$minIndex]) {
                    $minIndex = $x;

                    $result[0] = $result[0] === -1 ? $i : min($result[0], $i);
                    $result[1] = $result[1] === -1 ? $x : max($result[1], $x);
                }
            }

            if ($i !== $minIndex) {
                Arr::swap($i, $minIndex, $arr);
            }

        }

        return $result;
    }
}