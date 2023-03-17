<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\SubarraySort;
use PHPUnit\Framework\TestCase;

class SubarraySortTest extends TestCase
{

    /**
     * Write a function that takes in an array of at least two integers and that
     * returns an array of the starting and ending indices of the smallest subarray
     * in the input array that needs to be sorted in place in order for the entire
     * input array to be sorted (in ascending order).
     *
     * If the input array is already sorted, the function should return
     * [-1, -1].
     *
     * Sample Input
     * array = [1, 2, 4, 7, 10, 11, 7, 12, 6, 7, 16, 18, 19]
     *
     * Sample Output
     * [3, 9]
     * https://www.algoexpert.io/questions/subarray-sort
     *
     * @dataProvider provider
     * @test
     */
    public function subarray_sort_test($arr, $expected)
    {
        $this->assertSame($expected, SubarraySort::find($arr));
    }

    public static function provider()
    {
        return [
            [[1, 2, 4, 7, 10, 11, 7, 12, 6, 7, 16, 18, 19], [3, 9]],
            [[1, 2], [-1, -1]],
            [[2, 1], [0, 1]],
            [[1, 2, 4, 7, 10, 11, 7, 12, 7, 7, 16, 18, 19], [4, 9]],
            [[1, 2, 4, 7, 10, 11, 7, 12, 13, 14, 16, 18, 19], [4, 6]],
            [[1, 2, 8, 4, 5], [2, 4]],
            [[4, 8, 7, 12, 11, 9, -1, 3, 9, 16, -15, 51, 7], [0, 12]],
            [[4, 8, 7, 12, 11, 9, -1, 3, 9, 16, -15, 11, 57], [0, 11]],
            [[-41, 8, 7, 12, 11, 9, -1, 3, 9, 16, -15, 11, 57], [1, 11]],
            [[1, 2, 3, 4, 5, 6, 8, 7, 9, 10, 11], [6, 7]],
            [[1, 2, 3, 4, 5, 6, 18, 7, 9, 10, 11, 12, 13, 14, 15, 16, 17, 19], [6, 16]],
            [
                [
                    1,
                    2,
                    3,
                    4,
                    5,
                    6,
                    18,
                    21,
                    22,
                    7,
                    14,
                    9,
                    10,
                    11,
                    12,
                    13,
                    14,
                    15,
                    16,
                    17,
                    19,
                    4,
                    14,
                    11,
                    6,
                    33,
                    35,
                    41,
                    55
                ],
                [4, 24]
            ],
            [[1, 2, 20, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19], [2, 19]],
            [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 2], [2, 19]],
            [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20], [-1, -1]],
            [[0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89], [-1, -1]],
        ];
    }
}
