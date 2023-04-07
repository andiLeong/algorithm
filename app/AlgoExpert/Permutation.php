<?php

namespace App\AlgoExpert;

class Permutation
{
    public static function find($arr)
    {
        $result = [];
        self::get($arr, [], $result);
        return $result;
    }

    private static function get($arr, array $current, array &$result)
    {
        if (empty($arr) && count($current)) {
            $result[] = $current;
        } else {
            for ($i = 0; $i < sizeof($arr); $i++) {
                $newArr = array_merge(
                    array_slice($arr, 0, $i),
                    array_slice($arr, $i + 1)
                );
                $appendedCurrent = array_merge($current, [$arr[$i]]);
                self::get($newArr, $appendedCurrent, $result);
            }
        }

    }
}