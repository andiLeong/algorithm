<?php

namespace App\AlgoExpert;

class TwoNumberSum
{
    public static function sum($number, $target)
    {
        $new = [];

        foreach ($number as $value) {
            $result = $target - $value;
            if (array_key_exists($result, $new)) {
                return [$value, $result];
            }
            $new[$value] = true;
        }

        return [];
    }
}