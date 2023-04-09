<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\MaxSubsetSumNoAdjacent;
use PHPUnit\Framework\TestCase;

class MaxSubsetSumNoAdjacentTest extends TestCase
{

    /**
     * Write a function that takes in an array of positive integers and returns the
     * maximum sum of non-adjacent elements in the array.
     *
     * If the input array is empty, the function should return 0.
     * Sample Input
     * array = [75, 105, 120, 75, 90, 135]
     *
     * Sample Output
     * 330 // 75 + 120 + 135
     * https://www.algoexpert.io/questions/max-subset-sum-no-adjacent
     *
     * @dataProvider provider
     * @test
     */
    public function max_subset_sum_no_adjacent_test($arr, $expected)
    {
        $this->assertSame($expected, MaxSubsetSumNoAdjacent::calculate($arr));
    }

    public static function provider()
    {
        return [
            [[75, 105, 120, 75, 90, 135], 330],
            [[], 0],
            [[1], 1],
            [[1, 2], 2],
            [[1, 2, 3], 4],
            [[1, 15, 3], 15],
            [[7, 10, 12, 7, 9, 14], 33],
            [[4, 3, 5, 200, 5, 3], 207],
            [[10, 5, 20, 25, 15, 5, 5, 15], 60],
            [[10, 5, 20, 25, 15, 5, 5, 15, 3, 15, 5, 5, 15], 90],
            [[125, 210, 250, 120, 150, 300], 675],
            [[30, 25, 50, 55, 100], 180],
            [[30, 25, 50, 55, 100, 120], 205],
            [[7, 10, 12, 7, 9, 14, 15, 16, 25, 20, 4], 72],
        ];
    }
}
