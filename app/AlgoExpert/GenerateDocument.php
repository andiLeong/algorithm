<?php

namespace App\AlgoExpert;

class GenerateDocument
{
    public static function generate($str, $document)
    {
        $count = [];

        for ($i = 0; $i < strlen($str); $i++) {
            if (isset($count[$str[$i]])) {
                $count[$str[$i]]++;
            } else {
                $count[$str[$i]] = 1;
            }
        }

        for ($i = 0; $i < strlen($document); $i++) {
            if (!isset($count[$document[$i]]) || $count[$document[$i]] < 1) {
                return false;
            }

            $count[$document[$i]]--;
        }

        return true;

        $completed = [];
        for ($i = 0; $i < strlen($document); $i++) {
            $letter = $document[$i];
            for ($x = 0; $x < strlen($str); $x++) {
                if ($letter === $str[$x] && !isset($completed[$x])) {
                    $completed[$x] = $letter;
                    break;
                }
            }
        }

//        dump(implode('', $completed));
//        dd($completed);
        return implode('', $completed) === $document;
        return true;
    }

}