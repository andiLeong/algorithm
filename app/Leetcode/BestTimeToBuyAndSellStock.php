<?php

namespace App\Leetcode;

use App\Utility\Arr;
use App\Utility\NumberArr;

class BestTimeToBuyAndSellStock
{
    public static function handle(array $price)
    {
        $profit = 0;
        $minPrice = PHP_INT_MAX;

        foreach ($price as $value) {
            if ($value < $minPrice){
                $minPrice = $value;
            } else if ($value - $minPrice > $profit){
                $profit = $value - $minPrice;
            }
        }
        return $profit;

        //brute force
        foreach ($price as $index => $value) {
            $future = array_filter($price,
                fn($key) => $key > $index,
                ARRAY_FILTER_USE_KEY
            );

            if(Arr::empty($future)){
                continue;
            }
            $maxProfit = NumberArr::make(array_values($future))->largest() - $value;
            if($maxProfit > $profit){
                $profit = $maxProfit;
            }
        }

        return $profit;
    }
}