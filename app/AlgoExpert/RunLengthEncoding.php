<?php

namespace App\AlgoExpert;

class RunLengthEncoding
{
    public static function encode($str)
    {
        $res = [];
        $length = 1;

        for ($i = 1; $i < strlen($str); $i++) {
            $current = $str[$i];
            $previous = $str[$i - 1];

            if ($length === 9) {
                self::update($res, $length, $previous);
                continue;
            }

            if ($previous === $current) {
                $length++;
            } else {
                self::update($res, $length, $previous);
            }
        }

        self::update($res, $length, $str[strlen($str) - 1]);
        return implode('', $res);
    }

    public static function update(&$arr, &$length, $value)
    {
        $arr[] = $length;
        $arr[] = $value;
        $length = 1;
    }

}