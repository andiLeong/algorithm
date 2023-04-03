<?php

namespace App\AlgoExpert;

class BaseballScore
{
    public static function calculate($arr)
    {
        $res = [];
        $size = sizeof($arr);

        for ($i = 0; $i < $size; $i++) {

            $current = $arr[$i];
            if ($current === 'D') {
                $value = $res[sizeof($res) - 1] * 2;
                $res[] = $value;
                continue;
            }

            if ($current === '+') {
                $count = sizeof($res);
                $value = $res[$count - 2] + $res[$count - 1];
                $res[] = $value;
                continue;
            }

            if ($current === 'C') {
                array_pop($res);
                continue;
            }

            $res[] = $current;
        }

        //dump($res);
        return array_sum($res);
    }
}