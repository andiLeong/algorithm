<?php

namespace Tests;

use App\Leetcode\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends testcase
{

    /**
     *
     * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
     * You may assume that each input would have exactly one solution, and you may not use the same element twice.
     * https://leetcode.com/problems/two-sum/
     *
     * @dataProvider sumDataProvider
     * @test
     */
    public function two_sum_test($numbers, $target, $result)
    {
        $this->assertSame($result, TwoSum::start($numbers, $target));
    }

    public static function sumDataProvider()
    {
        return [
            [ [2,7,11,15], 9, [0,1] ],
            [ [3,2,4], 6, [1,2] ],
            [ [3,3], 6, [0,1] ],
//            [ [3,2,3], 6, [0,2] ],
        ];
    }
}