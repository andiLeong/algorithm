<?php

namespace App\AlgoExpert;

class ArrayOfProducts
{
    public static function calculate($arr)
    {
        $size = sizeof($arr);
        $result = [];

        $product = 1;
        for ($i = 0; $i < $size; $i++) {
            $result[] = $product;
            $product *= $arr[$i];
        }

        $product = 1;
        for ($x = $size - 1; $x >= 0; $x--) {
            $result[$x] *= $product;
            $product *= $arr[$x];
        }
        return $result;

        //brute force approach
        for ($i = 0; $i < $size; $i++) {
            $product = 1;
            for ($x = 0; $x < $size; $x++) {
                if ($i === $x) {
                    continue;
                }
                $product *= $arr[$x];
            }
            $result[] = $product;
        }

        return $result;
    }
}