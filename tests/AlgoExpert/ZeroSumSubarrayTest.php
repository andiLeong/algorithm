<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\ZeroSumSubarray;
use PHPUnit\Framework\TestCase;

class ZeroSumSubarrayTest extends TestCase
{

    /**
     * You're given a list of integers nums. Write a function that
     * returns a boolean representing whether there exists a zero-sum subarray of
     * nums.
     *
     * A zero-sum subarray is any subarray where all of the values add up to zero.
     * A subarray is any contiguous section of the array. For the purposes of this
     * problem, a subarray can be as small as one element and as long as the
     * original array.
     *
     * Sample Input
     * nums = [-5, -5, 2, 3, -2]
     * Sample Output
     * True // The subarray [-5, 2, 3] has a sum of 0
     * https://www.algoexpert.io/questions/zero-sum-subarray
     *
     * @dataProvider provider
     * @test
     */
    public function quick_sort_test($arr, $expected)
    {
        $this->assertSame($expected, ZeroSumSubarray::contain($arr));
    }

    public static function provider()
    {
        return [
            [[-5, -5, 2, 3, -2], true],
            [[-5, -5, 2, 30, -2], false],
            [[], false],
            [[1], false],
            [[1, 2, 3], false],
            [[1, 1, 1], false],
            [[-1, -1, -1], false],
            [[0], true],
            [[0, 0, 0], true],
            [[1, 2, -2, 3], true],
            [[2, -2], true],
            [[-1, 2, 3, 4, -5, -3, 1, 2], true],
            [[-2, -3, -1, 2, 3, 4, -5, -3, 1, 2], true],
            [[2, 3, 4, -5, -3, 4, 5], true],
            [[2, 3, 4, -5, -3, 5, 5], false],
            [[1, 2, 3, 4, 0, 5, 6, 7], true],
            [[1, 2, 3, -2, -1], true],
            [[-8, -22, 104, 73, -120, 53, 22, -12, 1, 14, -90, 13, -22], false],
            [[-8, -22, 104, 73, -120, 53, 22, 20, 25, -12, 1, 14, -90, 13, -22], true],
        ];
    }
}
