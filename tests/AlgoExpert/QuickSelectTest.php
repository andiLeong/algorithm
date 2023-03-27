<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\QuickSelect;
use PHPUnit\Framework\TestCase;

class QuickSelectTest extends TestCase
{

    /**
     * Write a function that takes in an array of distinct integers as well as an
     * integer k and that returns the kth smallest integer in that array.
     *
     * The function should do this in linear time, on average.
     * Sample Input
     * array = [8, 5, 2, 9, 7, 6, 3]
     * k = 3
     *
     * Sample Output
     * 5
     * https://www.algoexpert.io/questions/quickselect
     *
     * @dataProvider provider
     * @test
     */
    public function quick_select_test($arr, $k, $expected)
    {
        $this->assertSame($expected, QuickSelect::find($arr, $k));
    }

    public static function provider()
    {
        return [
            [[8, 5, 2, 9, 7, 6, 3], 3, 5],
            [[1], 1, 1],
            [[43, 24, 37], 1, 24],
            [[43, 24, 37], 2, 37],
            [[43, 24, 37], 3, 43],
            [[8, 3, 2, 5, 1, 7, 4, 6], 1, 1],
            [[8, 3, 2, 5, 1, 7, 4, 6], 2, 2],
            [[8, 3, 2, 5, 1, 7, 4, 6], 3, 3],

        ];
    }
}
