<?php

namespace App\Leetcode;

use App\Utility\Arr;

class SingleNumber
{
    public static function find(array $arr)
    {
        return array_values(array_filter(
            Arr::flip(Arr::valuesCount($arr)),
            fn($key) => $key === 1,
            ARRAY_FILTER_USE_KEY
        ))[0];

    }
}