<?php

namespace Tests;

use App\SummaryRanges;
use PHPUnit\Framework\TestCase;

class SummaryRangesTest extends testcase
{

    /**
     * You are given a sorted unique integer array nums.
     * A range [a,b] is the set of all integers from a to b (inclusive).
     * Return the smallest sorted list of ranges that cover all the numbers in the array exactly.
     * That is, each element of nums is covered by exactly one of the ranges, and there is no integer x such that x is in one of the ranges but not in nums.
     *
     * Each range [a,b] in the list should be output as:
     * "a->b" if a != b
     * "a" if a == b
     *
     * Input: nums = [0,1,2,4,5,7]
     * Output: ["0->2","4->5","7"]
     * Explanation: The ranges are:
     * [0,2] --> "0->2"
     * [4,5] --> "4->5"
     * [7,7] --> "7"
     *
     * https://leetcode.com/problems/summary-ranges/
     *
     * @dataProvider provider
     * @test
     */
    public function summary_ranges_test($arr, $result)
    {
        $this->assertSame($result, SummaryRanges::summarize($arr));
    }

    public static function provider()
    {
        return [
            [[0, 1, 2, 4, 5, 7], ['0->2', '4->5', '7']],
            [[0, 2, 3, 4, 6, 8, 9], ['0', '2->4', '6', '8->9']],
        ];
    }
}