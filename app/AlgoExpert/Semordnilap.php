<?php

namespace App\AlgoExpert;

class Semordnilap
{
    public static function pair($arr)
    {
        $copy = $arr;
        $res = [];

        for ($i = 0; $i < sizeof($arr); $i++) {
            $current = $arr[$i];
            $reverse = strrev($current);
            $key = array_search($reverse, $copy);
            if ($key !== false && $current !== $reverse) {
                $res[] = [$current, $reverse];
                unset($copy[$key]);
                unset($copy[$i]);
            }
        }

        return $res;
    }
}