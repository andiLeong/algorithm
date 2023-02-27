<?php

namespace App;

class ClimbingStairs
{

    public static function start($steps)
    {
        $combinations = [];

        $x = NumberArr::range(1, $steps);
        foreach ($x as $v){
            $combo = Arr::combination([1,2], $v);
            foreach ($combo as $value){
               $combinations[] = $value;
            }
        }

//        dump($combinations);
        $combinations = array_map('intval', $combinations);
        $size = Arr::size(array_filter($combinations, fn($v) => Number::sum($v) === $steps));
        return $size;
    }

}