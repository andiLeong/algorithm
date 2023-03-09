<?php

namespace App\AlgoExpert;

use App\Utility\Number;
use App\Utility\NumberArr;

class RadixSort
{
    /**
     * implement radix sort algorithm
     * use counting sort for each digit of the array item
     * for example given array [98,45,33,2]
     * use counting sort to sort digit 2,3,5,8
     * then repeat the whole process until the all digits are looped
     *
     * https://www.programiz.com/dsa/radix-sort
     * @param $arr
     */
    public static function sort(&$arr)
    {
        $max = NumberArr::make($arr)->largest();
        $length = Number::length($max);
        for ($i = 1; $i <= $length; $i++) {
            static::countingSort($arr, $i);
        }
    }

    public static function countingSort(&$arr, $place = 1)
    {
        $new = $arr;
        $size = sizeof($arr);
        $count = array_fill(0, 9 + 1, 0);

        for ($i = $size - 1; $i >= 0; $i--) {
            $value = $arr[$i];
            $digit = static::getDigit($value, $place);
            $count[$digit]++;
        }

        $accumulateCount = 0;
        for ($i = 0; $i < 10; $i++) {
            $accumulateCount += $count[$i];
            $count[$i] = $accumulateCount;
        }

        for ($i = $size - 1; $i >= 0; $i--) {
            $value = $arr[$i];
            $digit = static::getDigit($value, $place);

            $key = $count[$digit] - 1;
            $new[$key] = $value;
            $count[$digit]--;
        }

        $arr = $new;
    }

    public static function getDigit($number, $place)
    {
        $res = 10 ** ($place - 1);
        return floor($number / $res) % 10;
    }

}