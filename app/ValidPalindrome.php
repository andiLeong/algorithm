<?php

namespace App;

class ValidPalindrome
{
    public static function validate($str)
    {
        if($str === ' '){
            return true;
        }

        $original = '';

        foreach (str_split($str) as $value) {
            if(ctype_alnum($value)){
               $original .= strtolower($value);
            }
        }


        return $original === strrev($original);
        dd($original);

    }
}