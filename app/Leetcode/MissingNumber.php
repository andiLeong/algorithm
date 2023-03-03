<?php

namespace App\Leetcode;

use App\Utility\NumberArr;

class MissingNumber
{
    public static function find(array $arr)
    {
        $lookUp = NumberArr::range(NumberArr::make($arr)->smallest(), count($arr));

        sort($arr, SORT_NUMERIC);
        foreach ($lookUp as $key => $value) {
            $v = $arr[$key] ?? null;
            if ($v !== $value) {
                return $value;
            }
        }

        return 0;
        //using php array compare function
        return array_values(array_diff_assoc($lookUp, $arr))[0] ?? 0;
    }

}