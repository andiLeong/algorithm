<?php

namespace App\AlgoExpert;

class Powerset
{
    public static function find($arr)
    {
        $res = [[]];

        foreach ($arr as $value) {
            $size = sizeof($res);
            for ($x = 0; $x < $size; $x++) {
                $res[] = array_merge($res[$x], [$value]);
            }
        }

        return $res;
    }
}