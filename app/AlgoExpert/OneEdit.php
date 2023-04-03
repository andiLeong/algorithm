<?php

namespace App\AlgoExpert;

class OneEdit
{
    public static function edit($str, $str2)
    {
        if ($str === $str2) {
            return true;
        }

        $edited = false;
        $size1 = strlen($str);
        $size2 = strlen($str2);

        if (abs($size1 - $size2) > 1) {
            return false;
        }

        $left = 0;
        $right = 0;
        while (isset($str[$left]) && isset($str2[$right])) {
            if ($str[$left] === $str2[$right]) {
                $left++;
                $right++;
                continue;
            }

            if ($edited) {
                return false;
            }

            if ($size1 > $size2) {
                $left++;
            } elseif ($size2 > $size1) {
                $right++;
            } else {
                $left++;
                $right++;
            }
            $edited = true;
        }

        return true;
    }
}