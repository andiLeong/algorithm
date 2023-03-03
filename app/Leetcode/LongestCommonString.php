<?php

namespace App\Leetcode;

class LongestCommonString
{

    public static function find(array $arr)
    {
        $prefix = array_shift($arr);

        foreach ($arr as $value) {
            $count = strlen($prefix);

            //start looping over the first array item
            for ($i = 0; $i < $count; $i++) {
                if (!str_starts_with($value, $prefix)) {
                    $prefix = substr($prefix, 0, strlen($prefix) - 1);
                }

                // if length is zero meaning we dnt find anything we just return empty string
                if(strlen($prefix) === 0){
                    return '';
                }
            }
        }

        return $prefix;
    }
}