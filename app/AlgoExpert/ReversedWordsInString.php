<?php

namespace App\AlgoExpert;

class ReversedWordsInString
{
    public static function reverse($str)
    {
        $res = [];
        $word = [];

        for ($i = 0; $i < strlen($str); $i++) {
            $current = $str[$i];

            if ($current === ' ') {
                if (!empty($word)) {
                    array_unshift($res, implode('', $word));
                    $word = [];
                }
                array_unshift($res, ' ');
            } else {
                $word[] = $current;
            }

        }

        if (!empty($word)) {
            array_unshift($res, implode('', $word));
        }

        return implode('', $res);
    }
}