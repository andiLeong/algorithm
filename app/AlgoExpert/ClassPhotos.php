<?php

namespace App\AlgoExpert;

class ClassPhotos
{
    public static function validate($arr, $arr2)
    {
        QuickSort::sort($arr);
        QuickSort::sort($arr2);

        $backRow = $arr[0] > $arr2[0] ? $arr : $arr2;
        $frontRow = $backRow === $arr ? $arr2 : $arr;

        for ($i = 0; $i < sizeof($arr); $i++) {
            if ($backRow[$i] <= $frontRow[$i]) {
                return false;
            }
        }

        return true;
    }
}