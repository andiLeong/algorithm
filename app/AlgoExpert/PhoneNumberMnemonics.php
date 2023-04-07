<?php

namespace App\AlgoExpert;

class PhoneNumberMnemonics
{
    const LETTERS = [
        ['0'],
        ['1'],
        ['a', 'b', 'c'],
        ['d', 'e', 'f'],
        ['g', 'h', 'i'],
        ['j', 'k', 'l'],
        ['m', 'n', 'o'],
        ['p', 'q', 'r', 's'],
        ['t', 'u', 'v'],
        ['w', 'x', 'y', 'z'],
    ];

    public static function find($number)
    {
        $res = [];
        $current = array_fill(0, strlen($number), '0');
        self::pick(0, $number, $current, $res);
        return $res;
    }

    public static function pick($index, $number, &$current, &$result)
    {
        if ($index === strlen($number)) {
            $result[] = implode('', $current);
        } else {
            $digit = (int)$number[$index];
            $letters = self::LETTERS[$digit];
            for ($i = 0; $i < sizeof($letters); $i++) {
                $current[$index] = $letters[$i];
                self::pick($index + 1, $number, $current, $result);
            }
        }
    }

}