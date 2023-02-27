<?php

namespace App;

use InvalidArgumentException;

class Arr
{
    /**
     * get the next value of array
     * @param array $arr
     * @param int|string|null $index
     * @param int|string|null $nextIndex
     * @return mixed|void
     */
    public static function next(array $arr, int|string $index = null, int|string $nextIndex = null)
    {
        if (is_null($index) && is_null($nextIndex)) {
            throw new InvalidArgumentException('we cant get the next item for you, since index is not provided');
        }

        if (array_is_list($arr)) {
            $nextIndex ??= $index + 1;
            return $arr[$nextIndex] ?? null;
        }

        if ($nextIndex !== null && array_key_exists($nextIndex, $arr)) {
            return $arr[$nextIndex];
        }

        if ($index !== null && array_key_exists($index, $arr)) {
            $copy = $arr;

            while (current($copy) !== $copy[$index]) {
                next($copy);
            };

            $next = next($copy);
            return $next === false ? null : $next;
        }
    }

    public static function containsDuplicate(array $arr): bool
    {
        // using sort with reduce
        $index = 0;
        sort($arr, SORT_NUMERIC);
        return array_reduce($arr, function ($carry, $value) use (&$index, $arr) {
            if (static::next($arr, $index) === $value) {
                return true;
            }

            $index++;
            return $carry;
        }, false);

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

    /**
     * get the array values count
     * @param $arr
     * @return array
     */
    public static function valuesCount($arr)
    {
        $count = [];

        foreach ($arr as $value){
            if(array_key_exists($value, $count)){
               $count[$value] += 1;
            }else{
               $count[$value] = 1;
            }
        }

        return $count;
    }

    /**
     * flip the array key and value
     * @param array $arr
     * @return array
     */
    public static function flip(array $arr)
    {
        $res = [];

        foreach ($arr as $key => $value){
            $res[$value] = $key;
        }

        return $res;
    }

    /**
     * find the intersection of 2 array
     * @param $arr
     * @param $arr2
     * @return array
     */
    public static function intersection($arr, $arr2)
    {
//        $hi = array_intersect($arr, $arr2);
//        dump($hi);
//        return $hi;

        $res = [];

        foreach ($arr as $index => $value){
            if(in_array($value, $arr2, true)){
                $res[$index] = $value;
            }
        }

//        dump($res);
        return $res;
    }

    /**
     * make unique item of an array
     * @param array $arr
     * @return array
     */
    public static function unique(array $arr)
    {
        $new = [];

        foreach ($arr as $index => $value){

            if(in_array($value, $new)){
               continue;
            }

            $new[$index] = $value;
        }

        return $new;
    }


    /**
     * get the count of array
     * @param array $arr
     * @return int
     */
    public static function size(array $arr)
    {
        $size = 0;
        foreach ($arr as $value){
           $size ++;
        }
        return $size;
    }

    public static function combination($chars, $size, $combinations = [])
    {
            # if it's the first iteration, the first set
            # of combinations is the same as the set of characters
            if (empty($combinations)) {
                $combinations = $chars;
            }

            # we're done if we're at size 1
            if ($size == 1) {
                return $combinations;
            }

            # initialise array to put new values in
            $new_combinations = [];

            # loop through existing combinations and character set to create strings
            foreach ($combinations as $combination) {
                foreach ($chars as $char) {
                    $new_combinations[] = $combination . $char;
                }
            }

            # call same function again for the next iteration
            return self::combination($chars, $size - 1, $new_combinations);
    }

}