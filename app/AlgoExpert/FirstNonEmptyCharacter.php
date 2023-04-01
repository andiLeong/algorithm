<?php

namespace App\AlgoExpert;

class FirstNonEmptyCharacter
{
    public static function find($str)
    {
        $count = [];

        for ($i = 0; $i < strlen($str); $i++) {
            if (isset($count[$str[$i]])) {
                $count[$str[$i]][0]++;
            } else {
                $count[$str[$i]] = [1, $i];
            }
        }

        foreach ($count as $value) {
            if ($value[0] === 1) {
                return $value[1];
            }
        }

        return -1;
    }
}