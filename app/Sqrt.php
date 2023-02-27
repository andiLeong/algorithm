<?php

namespace App;

class Sqrt
{
    public static function calculate($value)
    {
        $number = 1;
        while (true) {
            $res = $number * $number;

            if ($res === $value) {
                $result = $number;
                break;
            }

            if($res > $value){
                $result = $number - 1;
                break;
            }

            $number += 1;
        }
        return $result;
    }
}