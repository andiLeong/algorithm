<?php

namespace App\AlgoExpert;

class LargestRange
{
    public static function find($arr)
    {
        $size = sizeof($arr);
        $result = [
            'length' => 0,
            'range' => [1, 1],
        ];
        $lookup = [];

        for ($i = 0; $i < $size; $i++) {
            $lookup[$arr[$i]] = true;
        }

        for ($i = 0; $i < $size; $i++) {
            $current = $arr[$i];
            if ($lookup[$current] === false) {
                continue;
            }

            $lookup[$current] = false;
            $left = $current - 1;
            $right = $current + 1;

            while (array_key_exists($left, $lookup)) {
                $lookup[$left] = false;
                $left--;
            }

            while (array_key_exists($right, $lookup)) {
                $lookup[$right] = false;
                $right++;
            }

            $right--;
            $left++;
            self::setRange($result, [$left, $right]);
        }

        return $result['range'];

        // sort first then calculate range
        QuickSort::sort($arr);
        $start = 0;

        for ($i = 0; $i < $size - 1; $i++) {
            $current = $arr[$i];
            $next = $arr[$i + 1];
            $length = static::getLength($current, $arr[$start], $i, $size);

            if ($current + 1 === $next || $next === $current) {
                $range = [$arr[$start], $next];
            } else {
                $range = [$arr[$start], $current];
                $start = $i + 1;
            }

            static::setRange($result, $range);
        }

        return $result['range'];
    }

    public static function setRange(&$result, $range)
    {
        $length = $range[1] - $range[0] + 1;
        if ($length > $result['length']) {
            $result['range'] = $range;
            $result['length'] = $length;
        }
    }

    public static function getLength($current, $start, $index, $size)
    {
        $length = $current - $start + 1;
        if ($index === $size - 2) {
            $length += 1;
        }
        return $length;
    }


}