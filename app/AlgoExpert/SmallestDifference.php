<?php

namespace App\AlgoExpert;

class SmallestDifference
{

    public static function find($arr, $arr2)
    {
        $result = [
            'value' => PHP_INT_MAX,
            'combo' => [],
        ];

        QuickSort::sort($arr);
        QuickSort::sort($arr2);

        $left = 0;
        $right = 0;
        while ($left < sizeof($arr) && $right < sizeof($arr2) ) {

            $leftValue = $arr[$left];
            $rightValue = $arr2[$right];

             if ($leftValue < $rightValue) {
                $value = $rightValue - $leftValue;
                $left++;
            } else if ($rightValue < $leftValue) {
                $value = $leftValue - $rightValue;
                $right++;
            }else{
                return [$leftValue, $rightValue];
            }

            if ($value < $result['value']) {
                $result['value'] = $value;
                $result['combo'] = [$leftValue, $rightValue];
            }
        }

        return $result['combo'];

        // loop everything example
        for ($i = 0; $i < sizeof($arr); $i++) {
            $first = $arr[$i];

            for ($x = 0; $x < sizeof($arr2); $x++) {
                $second = $arr2[$x];

                if ($first < 0 && $second < 0) {
                    $value = abs(abs($first) - abs($second));
                } else {
                    $value = abs($first - $second);
                }

                if ($value < $result['value']) {
                    $result['value'] = $value;
                    $result['combo'] = [$first, $second];
                }

            }
        }

        return $result['combo'];
    }

}