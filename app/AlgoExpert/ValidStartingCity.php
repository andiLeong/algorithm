<?php

namespace App\AlgoExpert;

class ValidStartingCity
{
    public static function check($distances, $fuel, $mpg)
    {
        $size = sizeof($distances);
//        $index = 0;
//        $min = 0;
//        $currentMiles = 0;
//        for ($i = 1; $i < $size; $i++) {
//            $previousDistance = $distances[$i - 1];
//            $previousFuel = $fuel[$i - 1];
//            $currentMiles = ($previousFuel * $mpg + $currentMiles) - $previousDistance;
//            if ($currentMiles < $min) {
//                $min = $currentMiles;
//                $index = $i;
//            }
//        }
//
//        return $index;

        // brute force approach
        $lastIndex = $size - 1;
        for ($i = 0; $i < $size; $i++) {
            $valid = true;
            $miles = $fuel[$i] * $mpg;

            //circulate loop
            for ($x = $i + 1; $x < $size + $i; $x++) {

                //figure out the index to use
                if ($x > $lastIndex) {
                    $index = $x - $lastIndex - 1;
                } else {
                    $index = $x;
                }

                if ($index === 0) {
                    $index = $lastIndex;
                }

                $miles -= $distances[$index - 1];
                if ($miles < 0) {
                    $valid = false;
                    break;
                }

                //refill the gas
                $miles += $fuel[$index] * $mpg;
            }

            if ($valid) {
                return $i;
            }
        }

        return -1;
    }
}