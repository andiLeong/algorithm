<?php

namespace App\AlgoExpert;

use App\Utility\Arr;

class MoveElementToTheEnd
{
    public static function move(&$arr, $element)
    {
        $left = 0;
        $right = sizeof($arr) - 1;

        while ($left <= $right) {
            $leftValue = $arr[$left];
            $rightValue = $arr[$right];

            if ($leftValue === $element && $rightValue === $element) {
                $right--;
            } else if ($leftValue === $element && $rightValue !== $element) {
                Arr::swap($left, $right, $arr);
                $right--;
                $left++;
            }else if($leftValue !== $element && $rightValue !== $element){
                $left++;
            }else {
                $left++;
            }
        }

    }
}