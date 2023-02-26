<?php

namespace App;

class SingleNumber
{
    public static function find(array $arr)
    {
        $count = array_values(array_filter(
            Arr::flip(Arr::valuesCount($arr)),
            fn($value, $key) => $key === 1,
            ARRAY_FILTER_USE_BOTH
        ))[0];
//        dd($count);
        return $count;

    }
}