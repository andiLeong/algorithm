<?php

namespace App;

class Number
{

    public static function getLastDigits($number, $length = 4)
    {
        if ($length <= 0) {
            return $number;
        }

        // 1 => 10
        // 2 => 100
        // 3 => 1000
        $mod = 1;

        for ($x = 1; $x <= $length; $x++) {
            $mod = $mod * 10;
        }

        return $mod > PHP_INT_MAX
            ? $number
            : $number % $mod;
    }

    public static function reverse($number)
    {
        $length = static::length($number);

        // if length less than 2 there is nothing we can reverse
        if ($length < 2) {
            return $number;
        }

        //formula to reverse number is get the last number multiply by 10
        //then plus the previous number
        //eg 1998, reversed will be 8991
        //the last digit is 8, then times 10, get 80 then plus 9 get 89,
        //we get the first 2 digits right just continue the loop. 89*10=890+9=899*10=8990+1=8991

        //to get the last x digit from the number is thought
        //$number / $times % 10;
        //the time variable depends on the position the digit
        //eg 1943, if we want to get the 4, 1943 / 10 % 10
        //eg 1943, if we want to get the 9, 1943 / 100 % 100
        //eg 1943, if we want to get the 1, 1943 / 1000 % 1000


        $result = static::getLastDigits($number, 1);
        $times = 1;
        for ($x = 1; $x <= $length - 1; $x++) {

            $times = $times * 10;
            $y = $number / $times % 10;

            $result = ($result * 10) + $y;
        }

        return $result;
    }

    public static function length($number)
    {
        return ceil(log10(abs($number) + 1));
    }
}