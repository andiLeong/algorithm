<?php

namespace App\AlgoExpert;

class BubbleSort
{
    public static function sort(&$arr)
    {
        $size = sizeof($arr);
        for ($i = 0; $i < $size; $i++) {
            $swapped = false;
            for ($j = 0; $j < $size - $i - 1; $j++)
            {
                if ($arr[$j] > $arr[$j+1])
                {
                    $t = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $t;
                    $swapped = true;
                }
            }

            if ($swapped === false){
                break;
            }
        }
    }
}