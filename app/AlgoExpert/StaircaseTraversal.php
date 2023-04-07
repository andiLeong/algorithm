<?php

namespace App\AlgoExpert;

class StaircaseTraversal
{
    public static function calculate($height, $maxSteps)
    {
        if ($maxSteps == 1) {
            return 1;
        }

        $steps = array_fill(0, $height + 1, 0);
        $steps[0] = 1;
        $steps[1] = 1;

        for ($i = 2; $i < $height + 1; $i++) {

            //sum previous value
            $value = 0;
            $start = $i - 1;
            for ($x = $start; $x > $start - $maxSteps && $x >= 0; $x--) {
                $value += $steps[$x];
            }

            $steps[$i] = $value;
        }

        return $steps[$height];
    }
}