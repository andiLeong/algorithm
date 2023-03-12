<?php

namespace App\AlgoExpert;

class LongestPeak
{
    public static function length($arr)
    {
        $length = 0;

        for ($i = 1; $i < sizeof($arr) - 1; $i++) {
            $current = $arr[$i];
            $previous = $arr[$i - 1];
            $next = $arr[$i + 1];
            $hasPeak = $current > $next && $current > $previous;
            if (!$hasPeak) {
                continue;
            }

            $left = $i - 2;
            while ($left >= 0) {
                if ($arr[$left] >= $arr[$left + 1]) {
                    break;
                }
                $left--;
            }

            $right = $i + 2;
            while ($right <= sizeof($arr) - 1) {
                if ($arr[$right] >= $arr[$right - 1]) {
                    break;
                }
                $right++;
            }

            $start = $left + 1;
            $end = $right - 1;
            $calculatedLength = $end - $start + 1;
            if ($calculatedLength > $length) {
                $length = $calculatedLength;
            }

        }

        return $length;
    }
}