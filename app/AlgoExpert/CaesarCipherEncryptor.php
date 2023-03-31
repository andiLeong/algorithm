<?php

namespace App\AlgoExpert;

class CaesarCipherEncryptor
{
    const LETTERS = 'abcdefghijklmnopqrstuvwxyz';

    public static function solutionOne($str, $key)
    {
        $res = [];
        $key = $key % 26;
        $letters = str_split(self::LETTERS);

        for ($i = 0; $i < strlen($str); $i++) {
            $currentKey = array_search($str[$i], $letters) + $key;
            $res[] = $letters[$currentKey % 26];
        }

        return implode('', $res);
    }

    public static function solutionTwo($str, $key)
    {
        $key = $key % 26;
        $res = [];
        for ($i = 0; $i < strlen($str); $i++) {
            $currentKey = ord($str[$i]);
            $sum = $currentKey + $key;
            $mod = $sum % 122;
            $res[] = $sum <= 122 ? chr($sum) : chr(96 + $mod);
        }
        return implode('', $res);
    }

}