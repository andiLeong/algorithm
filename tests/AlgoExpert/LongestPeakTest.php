<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\LongestPeak;
use PHPUnit\Framework\TestCase;

class LongestPeakTest extends TestCase
{

    /**
     * Write a function that takes in an array of integers and returns the length of
     * the longest peak in the array.
     *
     * A peak is defined as adjacent integers in the array that are strictly
     * increasing until they reach a tip (the highest value in the peak), at which
     * point they become strictly decreasing. At least three integers are required to
     * form a peak.
     *
     * For example, the integers 1, 4, 10, 2 form a peak, but the
     * integers 4, 0, 10 don't and neither do the integers
     * 1, 2, 2, 0. Similarly, the integers 1, 2, 3 don't
     * form a peak because there aren't any strictly decreasing integers after the
     * 3.
     *
     * Sample Input
     * array = [1, 2, 3, 3, 4, 0, 10, 6, 5, -1, -3, 2, 3]
     *
     * Sample Output
     * 6 // 0, 10, 6, 5, -1, -3
     *
     * https://www.algoexpert.io/questions/longest-peak
     *
     * @dataProvider provider
     * @test
     */
    public function find_longest_peak($arr, $result)
    {
        $this->assertSame($result, LongestPeak::length($arr));
    }

    public static function provider()
    {
        return [
            [[1, 2, 2, 3, 4, 0, 10, 6, 5, -1, -3, 2, 3], 6],
            [[], 0],
            [[1,3,2], 3],
            [[1, 2, 3, 4, 5, 1], 6],
            [[5, 4, 3, 2, 1, 2, 1], 3],
            [[5, 4, 3, 2, 1, 2, 10, 12, -3, 5, 6, 7, 10], 5],
            [[5, 4, 3, 2, 1, 2, 10, 12], 0],
            [[1, 2, 3, 4, 5, 6, 10, 100, 1000], 0],
            [[1, 2, 3, 3, 2, 1], 0],
            [[1, 1, 3, 2, 1], 4],
            [[1, 2, 3, 2, 1, 1], 5],
            [[1, 1, 1, 2, 3, 10, 12, -3, -3, 2, 3, 45, 800, 99, 98, 0, -1, -1, 2, 3, 4, 5, 0, -1, -1], 9],
            [[1, 2, 3, 3, 4, 0, 10], 3],
        ];
    }
}
