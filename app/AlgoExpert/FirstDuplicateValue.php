<?php

namespace App\AlgoExpert;

class FirstDuplicateValue
{
    public static function find($arr)
    {
        $size = sizeof($arr);

        $lookUp = [];
        for ($i = 0; $i < $size; $i++) {
            if (array_key_exists($arr[$i], $lookUp)) {
                return $arr[$i];
            }
            $lookUp[$arr[$i]] = 0;
        }
        return -1;

        $firstDuplicateIndex = $size;

        for ($i = 0; $i < $size; $i++) {

            if ($i === $firstDuplicateIndex) {
                continue;
            }

            for ($x = $i + 1; $x < $size; $x++) {
                if ($arr[$i] === $arr[$x] && $x < $firstDuplicateIndex) {
                    $firstDuplicateIndex = $x;
                }
            }

        }

        return $firstDuplicateIndex === $size
            ? -1
            : $arr[$firstDuplicateIndex];
    }
}