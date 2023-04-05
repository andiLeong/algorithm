<?php

namespace App\AlgoExpert;

class LongestSubstringWithoutDuplication
{
    public static function find($str)
    {
        $size = strlen($str);
        $seen = [];
        $start = 0;
        $longest = [0, 1];
        for ($i = 0; $i < $size; $i++) {
            $current = $str[$i];

            if (isset($seen[$current])) {
                $start = max($start, $seen[$current] + 1);
            }

            if ($longest[1] - $longest[0] < $i + 1 - $start) {
                $longest = [$start, $i + 1];
            }

            $seen[$current] = $i;
        }

        return substr($str, $longest[0], $longest[1] - $longest[0]);
    }
}