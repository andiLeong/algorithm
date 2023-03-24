<?php

namespace App\AlgoExpert;

class TaskAssignment
{
    public static function assign($workers, $tasks)
    {
        $result = [];
        $lookUp = self::makeLookUp($tasks);
        QuickSort::sort($tasks);
        for ($i = 0; $i < $workers; $i++) {
            $end = sizeof($tasks) - $i - 1;
            $result[] = [
                array_pop($lookUp[$tasks[$i]]),
                array_pop($lookUp[$tasks[$end]]),
            ];
        }

        return $result;
    }

    private static function makeLookUp($arr)
    {
        $res = [];

        for ($i = 0; $i < sizeof($arr); $i++) {
            if (isset($res[$arr[$i]])) {
                $res[$arr[$i]][] = $i;
            } else {
                $res[$arr[$i]] = [$i];
            }
        }

        return $res;
    }
}