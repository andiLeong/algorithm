<?php

namespace Tests\Leetcode;

use App\Utility\Arr;
use PHPUnit\Framework\TestCase;

class ContainDuplicateTest extends testcase
{

    /**
     * Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.
     * https://leetcode.com/problems/contains-duplicate/
     *
     * @dataProvider provider
     * @test
     */
    public function it_can_check_if_array_contains_any_duplicate($arr, $result)
    {
        $this->assertSame($result, Arr::containsDuplicate($arr));
    }

    public static function provider()
    {
        return [
            [[1,2,3,1], true],
            [[1,2,3,4], false],
            [[1,1,1,3,3,4,3,2,4,2], true],
        ];
    }
}