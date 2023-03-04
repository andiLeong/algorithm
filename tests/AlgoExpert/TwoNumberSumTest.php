<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\TwoNumberSum;
use PHPUnit\Framework\TestCase;

class TwoNumberSumTest extends TestCase
{

    /**
     * Write a function that takes in a non-empty array of distinct integers and an integer representing a target sum.
     * If any two numbers in the input array sum up to the target sum,
     * the function should return them in an array, in any order.
     * If no two numbers sum up to the target sum, the function should return an empty array.
     * Note that the target sum has to be obtained by summing two different integers in the array.
     * you can't add a single integer to itself in order to obtain the target sum.
     *
     * You can assume that there will be at most one pair of numbers summing up to the target sum.
     *
     * <h3>Sample Input</h3>
     * array = [3, 5, -4, 8, 11, 1, -1, 6]
     * targetSum = 10
     *
     * Sample Output
     * [-1, 11] // the numbers could be in reverse order
     * https://www.algoexpert.io/questions/two-number-sum
     *
     * @dataProvider provider
     * @test
     */
    public function two_number_sum_test($numbers, $target, $result)
    {
        $this->assertSame($result, TwoNumberSum::sum($numbers, $target));
    }

    public static function provider()
    {
        return [
            [[3, 5, -4, 8, 11, 1, -1, 6], 10, [-1, 11]],
            [[4, 6], 10, [6, 4]],
            [[4, 6, 1], 5, [1, 4]],
            [[4, 6, 1, -3], 3, [-3 ,6]],
            [[1, 2, 3, 4, 5, 6, 7, 8, 9], 17, [9,8]],
            [[1, 2, 3, 4, 5, 6, 7, 8, 9, 15], 18, [15, 3]],
            [[-7, -5, -3, -1, 0, 1, 3, 5, 7], -5, [0, -5]],
            [[-21, 301, 12, 4, 65, 56, 210, 356, 9, -47], 163, [-47, 210]],
            [[-21, 301, 12, 4, 65, 56, 210, 356, 9, -47], 164, []],
            [[14], 15, []],
            [[15], 15, []],
        ];
    }
}
