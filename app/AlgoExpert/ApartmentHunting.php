<?php

namespace App\AlgoExpert;

class ApartmentHunting
{
    public static function find($blocks, $requirement)
    {
        $block = [
            'index' => 0,
            'distance' => PHP_INT_MAX,
        ];

        for ($i = 0; $i < sizeof($blocks); $i++) {

            $maxDistance = 0;

            for ($x = 0; $x < sizeof($requirement); $x++) {
                $distance = 0;
                $currentBuilding = $requirement[$x];
                if ($blocks[$i][$currentBuilding] === true) {
                    continue;
                }

                //explore the right
                $right = $i + 1;
                $rightValue = PHP_INT_MAX;
                while (isset($blocks[$right])) {
                    if ($blocks[$right][$currentBuilding] === true) {
                        $rightValue = $right - $i;
                        break;
                    }
                    $right++;
                }

                //explore the left
                $left = $i - 1;
                $leftValue = PHP_INT_MAX;
                while (isset($blocks[$left])) {
                    if ($blocks[$left][$currentBuilding] === true) {
                        $leftValue = $i - $left;
                        break;
                    }
                    $left--;
                }

                $distance = $distance + min($leftValue, $rightValue);
                $maxDistance = max($maxDistance, $distance);
            }

            if ($maxDistance < $block['distance']) {
                $block['index'] = $i;
                $block['distance'] = $maxDistance;
            }
        }

        return $block['index'];
    }

}