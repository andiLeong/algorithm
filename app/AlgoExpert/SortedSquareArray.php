<?php

namespace App\AlgoExpert;

class SortedSquareArray
{

    public static function sort($arr)
    {
        $size = count($arr);
        $start = 0;
        $end = $size - 1;
        $new = array_fill(0, $size, 0);

        for ($i = $size - 1; $i >= 0; $i--) {

            if ($start === $end) {
                $endValue = abs($arr[$end]);
                $new[$i] = $endValue * $endValue;
                break;
            }

            $endValue = abs($arr[$end]);
            $startValue = abs($arr[$start]);
            if ($endValue > $startValue) {
                $new[$i] = $endValue * $endValue;
                $end--;
            } else {
                $new[$i] = $startValue * $startValue;
                $start++;
            }
        }

        return $new;

        $new = [];
        foreach ($arr as $item) {
            $new[] = $item * $item;
        }
        sort($new);
        return $new;
    }

}