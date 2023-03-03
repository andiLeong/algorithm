<?php

namespace Tests\leetcode;

use App\Leetcode\MajorityElement;
use PHPUnit\Framework\TestCase;

class MajorityElementTest extends testcase
{

    /**
     * Given an array nums of size n, return the majority element.
     * The majority element is the element that appears more than ⌊n / 2⌋ times.
     * You may assume that the majority element always exists in the array.
     * https://leetcode.com/problems/majority-element/
     *
     * @dataProvider provider
     * @test
     */
    public function majority_element_test($arr, $result)
    {
        $this->assertSame($result, MajorityElement::find($arr));
    }

    public static function provider()
    {
        return [
            [[1, 2, 9, 9, 9], 9],
            [[3,2,3], 3],
            [[2,2,1,1,1,2,2], 2],
        ];
    }
}