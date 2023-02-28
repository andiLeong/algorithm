<?php

namespace App;

class BestTimeToBuyAndSellStock
{
    public static function handle(array $price)
    {
        $buyIndex = 0;
        foreach ($price as $index => $value) {
            if ($value === 0) {
                continue;
            }

            if ($next = NumberArr::make($price)->next($index)) {
                $toBuyIndex = $value < $next ? $index : $index + 1;
            }

            if ($value < $price[$buyIndex]) {
                $buyIndex = $toBuyIndex;
            }
        }

        $buy = $price[$buyIndex];
        $new = array_values(array_filter($price,
            fn($key) => $key > $buyIndex,
            ARRAY_FILTER_USE_KEY
        ));
//        dump($buy);
//        dump($buyIndex);
//        dd($new);

        if (Arr::empty($new)) {
            return 0;
        }

        $sell = NumberArr::make($new)->largest();
        return $sell - $buy;
    }
}