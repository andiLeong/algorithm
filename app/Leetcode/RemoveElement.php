<?php

namespace App\Leetcode;

use App\Utility\Arr;

class RemoveElement
{
    public static function remove(array &$arr, $value)
    {
        $new = [];

        foreach ($arr as $v){
            if($v !== $value){
                $new[] = $v;
            }
        }
        $size = Arr::size($new);

        for ($x = 1; $x <= Arr::size($arr) - $size; $x++) {
            $new[] = '_';
        }

        $arr = $new;
        return $size;
    }
}