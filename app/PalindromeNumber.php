<?php

namespace App;

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