<?php

namespace Tests\AlgoExpert;

class ShiftArrayValue
{
    public static function solutionOne($arr, $take)
    {
        $size = sizeof($arr);
        $lastIndex = $size - 1;
        if ($take > $size) {
            $take = $take % $size;
        }

        $new = [];
        for ($i = $lastIndex; $i >= $size - $take; $i--) {
            array_unshift($new, $arr[$i]);
        }

        $first = [];
        for ($i = 0; $i <= $size - $take - 1; $i++) {
            $first[] = $arr[$i];
        }

        return array_merge($new, $first);
    }

    public static function solutionTwo(&$arr, $take)
    {
        $lastIndex = sizeof($arr) - 1;
        for ($i = 0; $i < $take; $i++) {
            $value = array_pop($arr);

            //array unshift implementation
            for ($x = 0; $x < sizeof($arr); $x++) {
                $current = $arr[$x];
                $arr[$x] = $value;
                $value = $current;
            }
            $arr[$lastIndex] = $value;
            //array_unshift($arr, $value);
        }
        return $arr;
    }

}