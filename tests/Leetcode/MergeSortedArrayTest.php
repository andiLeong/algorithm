<?php

namespace Tests\Leetcode;

use App\Leetcode\MergeSortedArray;
use PHPUnit\Framework\TestCase;

class MergeSortedArrayTest extends testcase
{

    /**
     *
     * You are given two integer arrays nums1 and nums2, sorted in non-decreasing order, and two integers m and n, representing the number of elements in nums1 and nums2 respectively.
     * Merge nums1 and nums2 into a single array sorted in non-decreasing order.
     * The final sorted array should not be returned by the function, but instead be stored inside the array nums1.
     * To accommodate this, nums1 has a length of m + n, where the first m elements denote the elements that should be merged, and the last n elements are set to 0 and should be ignored. nums2 has a length of n.
     * https://leetcode.com/problems/merge-sorted-array/description/
     *
     * @dataProvider provider
     * @test
     */
    public function merge_sorted_array_test($num, $numCount, $num2, $num2Count, $result)
    {
        MergeSortedArray::merge($num, $numCount, $num2, $num2Count);
        $this->assertSame($result, $num);
    }

    public static function provider()
    {
        return [
            [[1, 2, 3, 0, 0, 0], 3, [2, 5, 6], 3, [1, 2, 2, 3, 5, 6]],
            [[0], 0, [1], 1, [1]],
            [[1], 1, [], 0, [1]],
        ];
    }
}