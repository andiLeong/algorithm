<?php

namespace App;

class MajorityElement
{

    public static function find(array $arr)
    {
        $count = Arr::flip(Arr::valuesCount($arr));
        krsort($count);
        return array_values($count)[0];
    }
}