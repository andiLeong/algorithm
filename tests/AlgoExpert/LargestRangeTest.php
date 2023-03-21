<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\LargestRange;
use PHPUnit\Framework\TestCase;

class LargestRangeTest extends TestCase
{

    /**
     * Write a function that takes in an array of integers and returns an array of
     * length 2 representing the largest range of integers contained in that array.
     *
     * The first number in the output array should be the first number in the range,
     * while the second number should be the last number in the range.
     *
     * A range of numbers is defined as a set of numbers that come right after each
     * other in the set of real integers. For instance, the output array
     * [2, 6] represents the range {2, 3, 4, 5, 6}, which
     * is a range of length 5. Note that numbers don't need to be sorted or adjacent
     * in the input array in order to form a range.
     *
     * You can assume that there will only be one largest range.
     * Sample Input
     * array = [1, 11, 3, 0, 15, 5, 2, 4, 10, 7, 12, 6]
     *
     * Sample Output
     * [0, 7]
     * https://www.algoexpert.io/questions/largest-range
     *
     * @dataProvider provider
     * @test
     */
    public function largest_range_test($arr, $expected)
    {
        $this->assertSame($expected, LargestRange::find($arr));
    }

    public static function provider()
    {
        return [
            [[1, 11, 3, 0, 15, 5, 2, 4, 10, 7, 12, 6], [0, 7]],
            [[0, 1, 2, 3, 4, 5, 6, 7, 10, 11, 12, 15], [0, 7]],
            [[1, 2, 3, 4, 5, 6, 9, 10, 11, -3], [1, 6]],
            [[-4, -3, -2, 5, 6, -1], [-4, -1]],
            [[-99, -4, -3, -2, 5, 6, -1], [-4, -1]],
            [[-99, -4, -3, -2, 5, 6, -1], [-4, -1]],
            [[1], [1, 1]],
            [[1, 2], [1, 2]],
            [[4, 2, 1, 3], [1, 4]],
            [[4, 2, 1, 3, 6], [1, 4]],
            [[8, 4, 2, 10, 3, 6, 7, 9, 1], [6, 10]],
            [[1, 2, 3, 4, 6, 7, 8, 9, 10], [6, 10]],
            [[1, 2, 3, 4, 5], [1, 5]],
            [[8, 4, 2, 10, 3, 6, 7, 9, 1, 99], [6, 10]],
            [[19, -1, 18, 17, 2, 10, 3, 12, 5, 16, 4, 11, 8, 7, 6, 15, 12, 12, 2, 1, 6, 13, 14], [10, 19]],
            [[0, 9, 19, -1, 18, 17, 2, 10, 3, 12, 5, 16, 4, 11, 8, 7, 6, 15, 12, 12, 2, 1, 6, 13, 14], [-1, 19]],
            [
                [
                    0,
                    -5,
                    9,
                    19,
                    -1,
                    18,
                    17,
                    2,
                    -4,
                    -3,
                    10,
                    3,
                    12,
                    5,
                    16,
                    4,
                    11,
                    7,
                    -6,
                    -7,
                    6,
                    15,
                    12,
                    12,
                    2,
                    1,
                    6,
                    13,
                    14,
                    -2
                ],
                [-7, 7]
            ],
            [
                [
                    -7,
                    -7,
                    -7,
                    -7,
                    8,
                    -8,
                    0,
                    9,
                    19,
                    -1,
                    -3,
                    18,
                    17,
                    2,
                    10,
                    3,
                    12,
                    5,
                    16,
                    4,
                    11,
                    -6,
                    8,
                    7,
                    6,
                    15,
                    12,
                    12,
                    -5,
                    2,
                    1,
                    6,
                    13,
                    14,
                    -4,
                    -2
                ],
                [-8, 19]
            ],
            [[1, 1, 1, 3, 4], [3, 4]],
            [[-1, 0, 1], [-1, 1]],
            [[10, 0, 1], [0, 1]],
        ];
    }
}
