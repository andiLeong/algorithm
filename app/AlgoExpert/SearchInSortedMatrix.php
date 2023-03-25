<?php

namespace App\AlgoExpert;

class SearchInSortedMatrix
{
    public static function search($arr, $target)
    {
        $rowId = 0;
        $columnId = sizeof($arr[0]) - 1;

        while (isset($arr[$rowId]) && $columnId >= 0) {
            $number = $arr[$rowId][$columnId];
            if ($number > $target) {
                $columnId--;
            } elseif ($number < $target) {
                $rowId++;
            } else {
                return [$rowId, $columnId];
            }
        }

        return [-1, -1];
        //brute force approach
        for ($i = 0; $i < sizeof($arr); $i++) {
            $current = $arr[$i];
//            dd($current);
            for ($x = 0; $x < sizeof($current); $x++) {
                if ($current[$x] === $target) {
                    return [$i, $x];
                }
            }
        }
        return [-1, -1];
    }

}