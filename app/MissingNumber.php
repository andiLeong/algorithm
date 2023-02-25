<?php

namespace App;

class MissingNumber
{
    public static function find(array $arr)
    {
        $length = count($arr);
        $lookUp = range(min($arr), $length);

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