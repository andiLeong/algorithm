<?php

namespace App\AlgoExpert;

class ThreeNumberSort
{
    public static function sort(&$arr, $order)
    {
        $size = sizeof($arr);
        $end = $size - 1;
        $start = 0;
        $middleCount = 0;

        for ($i = 0; $i < $size; $i++) {

            if ($order[0] === $arr[$i]) {
                //you are in first group
                $arr[$start] = $arr[$i];
                $start ++;

            } else if ($order[2] === $arr[$i]) {
                //you are last
                $arr[$end] = $arr[$i];
                $end --;
            } else {
                //you are middle
                $middleCount ++;
            }


        }

        for ($i = $start; $i < $middleCount + $start; $i++) {
            $arr[$i] = $order[1];
//            dump($i);
        }
//        $arr[$start] = $order[1];

//        dump($start);
//        dump($end);
//        dump($size - $end);
//        dump($middleCount);
//        dump($group);
//        dd($arr);
    }
}