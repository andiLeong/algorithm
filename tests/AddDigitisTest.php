<?php

namespace Tests;

use App\AddDigits;
use PHPUnit\Framework\TestCase;

class AddDigitisTest extends testcase
{

    /**
     * Given an integer num, repeatedly add all its digits until the result has only one digit, and return it.
     * Input: num = 38
     * Output: 2
     * Explanation: The process is
     * 38 --> 3 + 8 --> 11
     * 11 --> 1 + 1 --> 2
     * Since 2 has only one digit, return it.
     * https://leetcode.com/problems/add-digits/
     *
     * @dataProvider provider
     * @test
     */
    public function add_digits_test($number, $result)
    {
        $this->assertSame($result, AddDigits::add($number));
    }

    public static function provider()
    {
        return [
            [38, 2],
            [439, 7],
            [9843, 6],
            [0, 0],
            [199, 1],
            [708538619, 2],

        ];
    }
}