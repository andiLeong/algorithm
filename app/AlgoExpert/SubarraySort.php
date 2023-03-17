<?php

namespace App\AlgoExpert;

use App\Utility\Arr;

class SubarraySort
{
    public static function find($arr)
    {
        $size = sizeof($arr);
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