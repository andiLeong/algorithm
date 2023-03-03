<?php

namespace App;

class ExcelSheetColumnTitle
{
    public static function convert($number)
    {
        $title = '';
        $ord = ord('A');

        while ($number > 0) {
            $offset = ($number - 1) % 26;
            $title = chr($ord + $offset) . $title;
            $number = (int)(($number - 1) / 26);
        }

        return $title;
    }

}