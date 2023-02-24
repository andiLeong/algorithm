<?php

namespace App;

class Arr
{
    /**
     * get the next value of array
     * @param array $arr
     * @param int $index
     * @param int|null $nextIndex
     * @return mixed|void
     */
    public static function next(array $arr, int $index, int $nextIndex = null)
    {
        $nextIndex ??= $index + 1;
        if(isset($arr[$nextIndex])){
            return $arr[$nextIndex];
        }
    }

    public static function containsDuplicate(array $arr): bool
    {
        // using sort with reduce
        $index = 0;
        sort($arr, SORT_NUMERIC);
        return array_reduce($arr, function($carry, $value) use(&$index, $arr){
            if(static::next($arr, $index) === $value){
                return true;
            }

            $index++;
            return $carry;
        },false);

        //using foreach
        $new = [];
        foreach ($arr as $value) {
            if (in_array($value, $new, true)) {
                return true;
            }

            $new[] = $value;
        }
        return false;

        //using array_unique
        $originalLength = sizeof($arr);
        return $originalLength !== count(array_unique($arr));
    }
}