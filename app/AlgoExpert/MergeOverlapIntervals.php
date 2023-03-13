<?php

namespace App\AlgoExpert;

class MergeOverlapIntervals
{
    public static function merge($arr)
    {
        $size = sizeof($arr);
        $result = [];

        usort($arr, function ($a, $b) {
            return $a[0] > $b[0];
        });
//        dump($arr);

        $overlap = $arr[0];
        $result[] = $overlap;
        $latestIndex = 0;

        for ($i = 1; $i < $size; $i++) {

            $current = $arr[$i];
            if (self::isOverlap($current, $overlap)) {
                $overlap[1] = max($current[1], $overlap[1]);
                $result[$latestIndex] = $overlap;
            } else {
                $overlap = $current;
                $result[] = $overlap;
                $latestIndex++;
            }

        }

        return $result;

        $merge = [null, null];
        for ($i = 0; $i < $size; $i++) {

            $current = $next;
            $next = $arr[$i + 1];

            if ($merge[0] === null) {

                if (self::isOverlap($next, $current)) {
                    //hsa overlap intervals
                    self::pushToMerge($merge, $current[0], max($next[1], $current[1]));
                } else {
                    $result[] = $current;
                }

            } else {
                if ($next === null) {

                    if (self::isOverlap($current, $merge)) {
                        $merge[1] = max($current[1], $merge[1]);
                        $result[] = $merge;
//                        $merge = [null, null];
                    } else {
                        $result[] = $merge;
                        $result[] = $current;
                    }
                    continue;
                }

                if (self::isOverlap($current, $merge)) {
                    //hsa overlap intervals
                    $merge[1] = max($current[1], $merge[1]);
                } else {

                    //group merge is ended now
                    $result[] = $merge;
                    $merge = [null, null];

                    if (self::isOverlap($next, $current)) {
                        //has overlap intervals
                        self::pushToMerge($merge, $current[0], max($next[1], $current[1]));
                    } else {
                        $result[] = $current;
                    }
                }
            }


        }

        return $result;
    }

    public static function isOverlap($arr, $arr2)
    {
        return $arr[0] >= $arr2[0] && $arr[0] <= $arr2[1];
    }

    public static function pushToMerge(&$merge, $first, $second)
    {
        $merge[0] = $first;
        $merge[1] = $second;
    }

}