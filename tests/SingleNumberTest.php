<?php

namespace Tests;

use App\Leetcode\SingleNumber;
use PHPUnit\Framework\TestCase;

class SingleNumberTest extends testcase
{

    /**
     *
     * Given a non-empty array of integers nums, every element appears twice except for one. Find that single one.
     * You must implement a solution with a linear runtime complexity and use only constant extra space.
     * https://leetcode.com/problems/single-number/
     *
     * @dataProvider provider
     * @test
     */
    public function two_sum_test($arr, $result)
    {
        $this->assertSame($result, SingleNumber::find($arr));
    }

    public static function provider()
    {
        return [
            [[2, 2, 1], 1],
            [[4, 1, 2, 1, 2], 4],
            [[1], 1],
        ];
    }
}