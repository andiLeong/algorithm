<?php

namespace App\Leetcode;

use App\Utility\Number;

class PalindromeNumber
{

    public static function validate($number)
    {
        if($number < 0){
           return false;
        }

        return Number::reverse($number) == $number;
    }

}