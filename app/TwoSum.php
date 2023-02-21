<?php

namespace App;

class TwoSum
{

    public static function start($number, $target)
    {
        $length = count($number);
        foreach ($number as $key => $value){

            $nextIndex = $key + 1;
            if($nextIndex <= $length){
               $next = $number[$nextIndex];

               if(($value + $next) === $target){
                  return [$key, $nextIndex];
               }
            }
        }
    }
}