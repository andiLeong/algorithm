<?php

namespace App\AlgoExpert;

class FourNumberSum
{
    public static function sum($arr, $target)
    {
        $size = sizeof($arr);
        $result = [];
        $sums = [];

        for ($i = 0; $i < $size; $i++) {
            $current = $arr[$i];

//            dump('parent for loop ' . $arr[$i]);
            //loop thought the right side
            for ($x = $i + 1; $x < $size; $x++) {
//                dump('               nested for loop ' . $arr[$x]);
                $diff = $target - ($current + $arr[$x]);
                if (!array_key_exists($diff, $sums)) {
                    continue;
                }

                foreach ($sums[$diff] as $item) {
                    $result[] = array_merge($item, [$current, $arr[$x]]);
                }
            }

            //loop thought the left side
            for ($y = 0; $y < $i; $y++) {
//                dump('               left for loop ' . $arr[$y]);
                $left = $arr[$y];
                $sum = $current + $left;
                $toAppend = [$left, $current];
                if (array_key_exists($sum, $sums)) {
                    $sums[$sum][] = $toAppend;
                } else {
                    $sums[$sum] = [$toAppend];
                }
            }
        }

//        dump($sums);

        return $result;
    }
}