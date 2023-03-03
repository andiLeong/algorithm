<?php

namespace Tests\leetcode;

use App\Leetcode\BestTimeToBuyAndSellStock;
use PHPUnit\Framework\TestCase;

class BestTimeToBuyAndSellStockTest extends testcase
{

    /**
     * You are given an array prices where prices[i] is the price of a given stock on the ith day.
     * You want to maximize your profit by choosing a single day to buy one stock and choosing a different day in the future to sell that stock.
     * Return the maximum profit you can achieve from this transaction. If you cannot achieve any profit, return 0.
     * https://leetcode.com/problems/best-time-to-buy-and-sell-stock/
     *
     * @dataProvider provider
     * @test
     */
    public function best_time_to_buy_and_sell_stock_test($price, $result)
    {
        $this->assertSame($result, BestTimeToBuyAndSellStock::handle($price));
    }

    public static function provider()
    {
        return [
            [[7,1,5,3,6,4], 5],
            [[7,6,4,3,1], 0],
            [[2,1], 0],
            [[3,2,6,5,0,3], 4],
            [[1,7,1,5,3,6,4], 6],
            [[2,1], 0],
            [[7], 0],
            [[2,7,2,5,3,6,1], 5],
            [[2,4,1], 2],
            [[2,11,2,5,3,0,10], 10],
        ];
    }
}