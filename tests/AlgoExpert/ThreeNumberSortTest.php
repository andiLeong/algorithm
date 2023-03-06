<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\ThreeNumberSort;
use PHPUnit\Framework\TestCase;

class ThreeNumberSortTest extends TestCase
{

    /**
     * You're given an array of integers and another array of three distinct
     * integers. The first array is guaranteed to only contain integers that are in
     * the second array, and the second array represents a desired order for the
     * integers in the first array. For example, a second array of
     * [x, y, z] represents a desired order of
     * [x, x, ..., x, y, y, ..., y, z, z, ..., z] in the first array.
     *
     * Write a function that sorts the first array according to the desired order in
     * the second array.
     *
     * The function should perform this in place (i.e., it should mutate the input
     * array), and it shouldn't use any auxiliary space (i.e., it should run with
     * constant space: O(1) space).
     *
     * Note that the desired order won't necessarily be ascending or descending and
     * that the first array won't necessarily contain all three integers found in the
     * second array—it might only contain one or two.
     *
     * Sample Input
     * array = [1, 0, 0, -1, -1, 0, 1, 1]
     * order = [0, 1, -1]
     *
     * Sample Output
     * [0, 0, 0, 1, 1, 1, -1, -1]
     * https://www.algoexpert.io/questions/three-number-sort
     *
     * @dataProvider provider
     * @test
     */
    public function three_number_sort_test($arr, $order, $expected)
    {
        ThreeNumberSort::sort($arr, $order);
        $this->assertSame($expected, $arr);
    }

    public static function provider()
    {
        return [
            [[7, 8, 9, 7, 8, 9, 9, 9, 9, 9, 9, 9], [8, 7, 9], [8, 8, 7, 7, 9, 9, 9, 9, 9, 9, 9, 9]],
            [[7, 7, 7, 11, 11, 7, 11, 7], [11, 7, 9], [11, 11, 11, 7, 7, 7, 7, 7]],
            [[1], [0,1,2], [1]],
        ];
    }
}
