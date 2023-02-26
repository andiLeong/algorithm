<?php

namespace App;

class SummaryRanges
{
    public static function summarize(array $arr)
    {
//        using array_reduce
//        $index = 0;
//        $min = null;
//        return array_reduce($arr, function($carry, $value) use(&$index, $arr, &$min){
//            if (is_null($min)) {
//                $min = $value;
//            }
//
//            if ($value + 1 !== NumberArr::make($arr)->next($index)) {
//                $carry[] = $min !== $value ? "$min->$value" : (string) $value;
//                $min = null;
//            }
//
//            $index += 1;
//            return $carry;
//        },[]);

        $result = [];
        $min = null;

        foreach ($arr as $index => $value) {
            if (is_null($min)) {
                $min = $value;
            }

            if ($value + 1 !== NumberArr::make($arr)->next($index)) {
                $result[] = $min !== $value ? "$min->$value" : (string) $value;
                $min = null;
            }
        }

        return $result;
    }
}