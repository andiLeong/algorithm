<?php

namespace Tests;

use App\MissingNumber;
use PHPUnit\Framework\TestCase;

class MissingNumberTest extends testcase
{

    /**
     * Given an array nums containing n distinct numbers in the range [0, n], return the only number in the range that is missing from the array.
     * Input: nums = [3,0,1]
     * Output: 2
     * Explanation: n = 3 since there are 3 numbers, so all numbers are in the range [0,3].
     * 2 is the missing number in the range since it does not appear in nums.
     *
     * Constraints:
     * n == nums.length
     * 1 <= n <= 104
     * 0 <= nums[i] <= n
     * All the numbers of nums are unique.
     *
     * https://leetcode.com/problems/missing-number/
     *
     * @dataProvider provider
     * @test
     */
    public function find_missing_number_test($numbers, $result)
    {
        $this->assertSame($result, MissingNumber::find($numbers));
    }

    public static function provider()
    {
        return [
            [[1, 2, 4], 3],
            [[3, 0, 1], 2],
            [[0, 1], 2],
            [[9,6,4,2,3,5,7,0,1], 8],
            [[1], 0],
        ];
    }
}