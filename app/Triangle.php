<?php

namespace App;

class Triangle
{

    /**
     * make a triangle
     * @param $rows
     * @return \int[][]
     */
    public static function make($rows)
    {
        $result = [
            [1],
            [1, 1],
        ];

        if (in_array($rows, [1, 2])) {
            if ($rows === 1) {
                array_pop($result);
            }
            return $result;
        }

        for ($x = 1; $x <= $rows - 2; $x++) {
            $append = [1];
            $previousRow = $result[$x];
            foreach ($previousRow as $index => $previousValue) {
                if ($next = Arr::next($previousRow, $index)) {
                    $append[] = $previousValue + $next;
                }
            }
            $append[] = 1;
            $result[] = $append;
        }

        return $result;
    }

    /**
     * get triangle item by its index
     * @param $row
     * @return int[]
     */
    public static function get($row)
    {
        $triangle = static::make($row + 1);
        return $triangle[$row];
    }
}