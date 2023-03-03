<?php

namespace Tests;

use App\Leetcode\PlusOne;
use PHPUnit\Framework\TestCase;

class PlusOneTest extends testcase
{

    /**
     * you are given a large integer represented as an integer array digits, where each digits[i] is the ith digit of the integer.
     * The digits are ordered from most significant to least significant in left-to-right order. The large integer does not contain any leading 0's.
     * Increment the large integer by one and return the resulting array of digits.
     * https://leetcode.com/problems/plus-one/
     *
     * @dataProvider provider
     * @test
     */
    public function plus_one_test($numbers, $result)
    {
        $this->assertSame($result, PlusOne::plus($numbers));
    }

    public static function provider()
    {
        return [
            [[1,2,3,9,4,9,9], [1,2,3,9,5,0,0]],
            [[1,2,3], [1,2,4]],
            [[4,3,2,1], [4,3,2,2]],
            [[9], [1,0]],
            [[9,9], [1,0,0]],
            [
                [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6],
                [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,7]
            ],
        ];
    }
}