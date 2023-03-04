<?php

namespace Tests\Leetcode;

use PHPUnit\Framework\TestCase;

class SearchInsertPositionTest extends testcase
{
    /**
     * Given a sorted array of distinct integers and a target value, return the index if the target is found. If not, return the index where it would be if it were inserted in order.
     * You must write an algorithm with O(log n) runtime complexity.
     * https://leetcode.com/problems/search-insert-position/description/
     *
     * @dataProvider arrayProvider
     * @test
     */
    public function it_can_get_array_index_by_value_if_not_found_guess_the_array_index($array, $target, $expected)
    {
//        dd(range(-2,6));
        $this->assertSame($expected, \App\Leetcode\SearchInsertPosition::search($array,$target));
    }

    public static function arrayProvider()
    {
        return [
            [[1,3,5,6], 5, 2],
            [[1,3,5,6], 7, 4],
            [[1,3,5], 7, 3],
            [[1,3,5], 9, 3],
            [[1,3,5,6], 2, 1],
            [[1,3,5,6], 0, 0],
            [[-1,3,5,6], 0, 1],
            [[-3, -1,3,5,6], 0, 2],
            [[-3, -1,3,5,6], -2, 1],
            [[-3, -1,3,5,6], -99, 0],
        ];
    }
}