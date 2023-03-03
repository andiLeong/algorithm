<?php

namespace Tests\leetcode;

use App\Leetcode\RemoveElement;
use PHPUnit\Framework\TestCase;

class RemoveElementTest extends testcase
{

    /**
     * Given an integer array nums and an integer val, remove all occurrences of val in nums in-place.
     * The relative order of the elements may be changed.
     * Since it is impossible to change the length of the array in some languages, you must instead have the result be placed in the first part of the array nums.
     * More formally, if there are k elements after removing the duplicates, then the first k elements of nums should hold the final result.
     * It does not matter what you leave beyond the first k elements.
     * Return k after placing the final result in the first k slots of nums.
     * Do not allocate extra space for another array. You must do this by modifying the input array in-place with O(1) extra memory.
     *
     * https://leetcode.com/problems/remove-element/
     *
     * @dataProvider provider
     * @test
     */
    public function remove_duplicates_from_sorted_array($arr, $value, $result, $new)
    {
        $this->assertSame($result, RemoveElement::remove($arr, $value));
        $this->assertSame($arr, $new);
    }

    public static function provider()
    {
        return [
            [[0,1,2,2,3,0,4,2], 2, 5, [0,1,3,0,4,'_','_','_']],
            [[3,2,2,3], 3, 2, [2,2,'_','_']],
        ];
    }
}