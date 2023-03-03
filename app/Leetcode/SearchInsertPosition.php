<?php

namespace App\Leetcode;

class SearchInsertPosition
{

    public static function search(array $arr, $target)
    {
        $last = $arr[array_key_last($arr)];
        $first = $arr[0];

        $x = 0;
        while (true) {
            if($target > 0 && $x > $last){
                break;
            }

            if($target <= 0 && $x > abs($first)){
                break;
            }

            $previousValue = $target - $x;
            //dump($previousValue);
            foreach ($arr as $key => $value) {
                if ($value === $previousValue) {
                    return $x === 0 ? $key : $key + 1;
                }
            }
            $x = $x + 1;
        }

        return 0;
    }
}