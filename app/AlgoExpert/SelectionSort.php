<?php

namespace App\AlgoExpert;

class SelectionSort
{

    public static function sort(&$arr)
    {
        $size = count($arr);
        for ($i = 0; $i < $size; $i++) {

            if($i === $size - 1){
                break;
            }

            $minIndex = $i;
            $nextIndex = $i + 1;

            while (isset($arr[$nextIndex])) {
                if ($arr[$minIndex] > $arr[$nextIndex]) {
                    $minIndex = $nextIndex;
                }
                $nextIndex++;
            }

            if ($arr[$minIndex] < $arr[$i]) {
                $current = $arr[$i];
                $arr[$i] = $arr[$minIndex];
                $arr[$minIndex] = $current;
            }
        }
    }

}