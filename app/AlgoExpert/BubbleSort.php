<?php

namespace App\AlgoExpert;

use App\Utility\Arr;

class BubbleSort
{
    public static function sort(&$arr, $fn = null)
    {
        $fn ??= function ($a, $b) {
            return $a > $b;
        };

        $size = sizeof($arr);
        for ($i = 0; $i < $size; $i++) {

            $swapped = false;
            $pointer = 0;
            while ($pointer < $size - $i - 1) {
                if ($fn($arr[$pointer], $arr[$pointer + 1])) {
                    Arr::swap($pointer, $pointer + 1, $arr);
                    $swapped = true;
                }
                $pointer++;
            }

            if ($swapped === false) {
                break;
            }
        }
    }
}