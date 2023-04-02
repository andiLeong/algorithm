<?php

namespace App\AlgoExpert;

class GroupAnagrams
{
    public static function group($arr)
    {
        $checked = [];
        $size = sizeof($arr);

        for ($i = 0; $i < $size; $i++) {
            $current = $arr[$i];
            $sorted = self::sort($current);
            if (isset($checked[$sorted])) {
                $checked[$sorted][] = $current;
            } else {
                $checked[$sorted] = [$current];
            }
        }

        return array_values($checked);
    }

    public static function sort($str)
    {
        $str = str_split($str);
        sort($str);
        return implode('', $str);
    }

}