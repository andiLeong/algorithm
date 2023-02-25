<?php

namespace App;

class AddDigits
{
    public static function add(int $number)
    {
        if ($number === 0) {
            return 0;
        }

        $result = Number::sum($number);
        while ($result >= 10) {
            $result = Number::sum($result);
        }
        return $result;
    }
}