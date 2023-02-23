<?php

namespace App;

class PlusOne
{
    public static function plus(array $numbers)
    {
        $endsWith9 = [];
        foreach (array_reverse($numbers) as $value) {
            //finding 9 from the end of the array
            //if found push to the tem array, then remove from the original array
            if ($value !== 9) {
                break;
            }

            $endsWith9[] = $value;
            array_pop($numbers);
        }

        $lastKey = array_key_last($numbers);
        //if we dnt have 9 we just proceed to plus one at the end and return
        if (empty($endsWith9)) {
            $numbers[$lastKey] = $numbers[$lastKey] + 1;
            return $numbers;
        }

        //if we detect ending is 9, we just push as many as 0 to the end
        //before adding 0 we also increase the previous by 1, if we dbt have previous
        //we just pad with 1 there.
        if (empty($numbers)) {
            $numbers[] = 1;
        } else {
            $numbers[$lastKey] = $numbers[$lastKey] + 1;
        }

        for ($x = 1; $x <= count($endsWith9); $x++) {
            $numbers[] = 0;
        }

        //dump($numbers);
        return $numbers;
    }
}