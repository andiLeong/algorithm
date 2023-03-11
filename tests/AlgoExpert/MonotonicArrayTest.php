<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\MonotonicArray;
use PHPUnit\Framework\TestCase;

class MonotonicArrayTest extends TestCase
{

    /**
     * Write a function that takes in an array of integers and returns a boolean
     * representing whether the array is monotonic.
     *
     * An array is said to be monotonic if its elements, from left to right, are
     * entirely non-increasing or entirely non-decreasing.
     *
     * Non-increasing elements aren't necessarily exclusively decreasing; they simply
     * don't increase. Similarly, non-decreasing elements aren't necessarily
     * exclusively increasing; they simply don't decrease.
     *
     * Note that empty arrays and arrays of one element are monotonic.
     * Sample Input
     * array = [-1, -5, -10, -1100, -1100, -1101, -1102, -9001]
     * Sample Output
     * true
     * https://www.algoexpert.io/questions/monotonic-array
     *
     * @dataProvider provider
     * @test
     */
    public function monotonic_array_test($arr, $expected)
    {
        $this->assertSame($expected, MonotonicArray::validate($arr));
    }

    public static function provider()
    {
        return [
            [[-1, -5, -10, -1100, -1100, -1101, -1102, -9001], true],
            [[1, 1, 1, 2], true],
            [[1, 1, 1, 1], true],
            [[2, 2, 2, 1], true],
            [[], true],
            [[2], true],
            [[1, 2], true],
            [[2, 1], true],
            [[1, 5, 10, 1100, 1101, 1102, 9001], true],
            [[-1, -5, -10, -1100, -1101, -1102, -9001], true],
            [[-1, -5, -10, -1100, -900, -1101, -1102, -9001], false],
            [[1, 2, 0], false],
            [[1, 1, 2, 3, 4, 5, 5, 5, 6, 7, 8, 7, 9, 10, 11], false],
            [[1, 1, 2, 3, 4, 5, 5, 5, 6, 7, 8, 8, 9, 10, 11], true],
            [[-1, -1, -2, -3, -4, -5, -5, -5, -6, -7, -8, -7, -9, -10, -11], false],
            [[-1, -1, -2, -3, -4, -5, -5, -5, -6, -7, -8, -8, -9, -10, -11], true],
            [[-1, -1, -1, -1, -1, -1, -1, -1], true],
            [[1, 2, -1, -2, -5], false],
            [[-1, -5, 10], false],
            [[2, 2, 2, 1, 4, 5], false],
            [[1, 1, 1, 2, 3, 4, 1], false],
            [[1, 2, 3, 3, 2, 1], false],
        ];
    }
}
