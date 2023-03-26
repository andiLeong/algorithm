<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\SearchForRange;
use PHPUnit\Framework\TestCase;

class SearchForRangeTest extends TestCase
{

    /**
     * Write a function that takes in a sorted array of integers as well as a target
     * integer. The function should use a variation of the Binary Search algorithm to
     * find a range of indices in between which the target number is contained in the
     * array and should return this range in the form of an array.
     *
     * The first number in the output array should represent the first index at which
     * the target number is located, while the second number should represent the
     * last index at which the target number is located. The function should return
     * [-1, -1] if the integer isn't contained in the array.
     *
     * If you're unfamiliar with Binary Search, we recommend watching the Conceptual
     * Overview section of the Binary Search question's video explanation before
     * starting to code.
     *
     * Sample Input
     * array = [0, 1, 21, 33, 45, 45, 45, 45, 45, 45, 61, 71, 73]
     * target = 45
     *
     * Sample Output
     * [4, 9]
     * https://www.algoexpert.io/questions/search-for-range
     *
     * @dataProvider provider
     * @test
     */
    public function search_for_range_test($arr, $target, $expected)
    {
        $this->assertSame($expected, SearchForRange::search($arr, $target));
    }

    public static function provider()
    {

        return [
            [[0, 1, 21, 33, 45, 45, 45, 45, 45, 45, 61, 71, 73], 45, [4, 9]],
            [[0, 1, 21, 33, 44, 44, 45, 45, 45, 45, 61, 71, 73], 45, [6, 9]],
            [[5, 7, 7, 8, 8, 10], 5, [0, 0]],
            [[5, 7, 7, 8, 8, 10], 7, [1, 2]],
            [[5, 7, 7, 8, 8, 10], 8, [3, 4]],
            [[5, 7, 7, 8, 8, 10], 10, [5, 5]],
            [[5, 7, 7, 8, 8, 10], 9, [-1, -1]],
            [[0, 1, 21, 33, 45, 45, 45, 45, 45, 45, 61, 71, 73], 47, [-1, -1]],
            [[0, 1, 21, 33, 45, 45, 45, 45, 45, 45, 61, 71, 73], -1, [-1, -1]],
            [[0, 1, 21, 33, 45, 45, 45, 45, 45, 45, 45, 45, 45], 45, [4, 12]],

        ];
    }
}
