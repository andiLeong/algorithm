<?php

namespace App\AlgoExpert;

class TwoNumberSum
{
    public static function sum($number, $target)
    {
        $new = [];

        foreach ($number as $index => $value) {

            $result = $target - $value;
            if (array_key_exists($result, $new) && $index !== $new[$result]) {
                return [$value, $result];
            }

            $new[$value] = $index;
        }

        return [];
    }
}