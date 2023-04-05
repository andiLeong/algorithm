<?php

namespace App\AlgoExpert;

class NthFibonacci
{
    public static function solutionOne($number)
    {
        if ($number == 1) {
            return 0;
        }

        // 0, 1, 1, 2, 3, 5
        $arr = [0, 1];

        for ($i = 2; $i < $number; $i++) {
            $size = sizeof($arr);
            $arr[] = $arr[$size - 1] + $arr[$size - 2];
        }

        return $arr[sizeof($arr) - 1];
    }

    public static function solutionTwo($number)
    {
        $arr = [0, 1];
        $times = $number - sizeof($arr);

        for ($i = 0; $i < $times; $i++) {
            $next = $arr[0] + $arr[1];
            $arr[] = $next;
            array_shift($arr);
        }

        return $number > 1 ? $arr[sizeof($arr) - 1] : $arr[0];
    }

    public static function solutionThree($number, $lookUp = [1 => 0, 2 => 1])
    {
        if (isset($lookUp[$number])) {
            return $lookUp[$number];
        }

        $lookUp[$number] = self::solutionThree($number - 1, $lookUp) + self::solutionThree($number - 2, $lookUp);
        return $lookUp[$number];


    }

}