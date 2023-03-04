<?php

namespace App\Leetcode;

class TwoSum
{

    public static function start($number, $target)
    {
        $length = count($number);
        $new = [];

        for ($i = 0; $i < $length; $i++) {
           $new[$number[$i]] = $i;
        }

        for ($i = 0; $i < $length; $i++) {
            $result = $target - $number[$i];
            if(array_key_exists($result, $new) && $i !== $new[$result]){
                return [$i, $new[$result]];
            }
        }

        return null;

        // brute force
        foreach ($number as $index => $value) {
            $pointer = $index + 1;

            while ($pointer < $length) {
                if (($value + $number[$pointer]) === $target) {
                    return [$index, $pointer];
                }
                $pointer++;
            }
        }

        return [];
    }
}