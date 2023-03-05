<?php

namespace App\AlgoExpert;

class ProductSum {

    public static function sum($arr, $level = 1)
    {
        $res = 0;
        foreach ($arr as $item) {
            if(is_array($item)){
                $res += static::sum($item, $level + 1);
            }else{
               $res += $item;
            }
        }
        return $res * $level;
    }
}