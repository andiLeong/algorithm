<?php

namespace App\AlgoExpert;

class MonotonicArray
{
    public static function validate($arr): bool
    {
        $direction = '';
        for ($i = 0; $i < sizeof($arr) - 1; $i++) {

            $next = $arr[$i + 1];
            if ($arr[$i] === $next) {
                continue;
            }

            if (empty($direction)) {
                $direction = $arr[$i] > $next ? 'down' : 'up';
                continue;
            }

            if ($arr[$i] > $next && $direction === 'up') {
                return false;
            } else if ($arr[$i] < $next && $direction === 'down') {
                return false;
            }
        }
        return true;
    }
}