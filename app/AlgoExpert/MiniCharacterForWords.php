<?php

namespace App\AlgoExpert;

class MiniCharacterForWords
{
    public static function find($arr)
    {
        $frequency = [];
        $count = [];
        $res = [];

        for ($i = 0; $i < sizeof($arr); $i++) {
            $word = $arr[$i];

            for ($x = 0; $x < strlen($word); $x++) {
                $character = $word[$x];
                if (isset($count[$character])) {
                    $count[$character]++;
                } else {
                    $count[$character] = 1;
                }
            }

            foreach ($count as $letter => $value) {
                if (isset($frequency[$letter])) {
                    $frequency[$letter] = max($frequency[$letter], $value);
                } else {
                    $frequency[$letter] = 1;
                }
            }

            $count = [];
        }

        foreach ($frequency as $index => $value) {
            for ($y = 0; $y < $value; $y++) {
                $res[] = $index;
            }
        }

        return $res;
    }
}