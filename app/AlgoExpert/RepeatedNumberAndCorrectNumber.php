<?php

namespace App\AlgoExpert;

class RepeatedNumberAndCorrectNumber
{
    public static function get($arr)
    {
        $res = [];

        for ($i = 0; $i < sizeof($arr) - 1; $i++) {
            $current = $arr[$i];
            $next = $arr[$i + 1];
            if ($current + 1 !== $next) {
                $res[] = $next;
                $res[] = $current + 1;
                break;
            }
        }

        return $res;
    }
}