<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\ShiftedBinarySearch;
use PHPUnit\Framework\TestCase;

class ShiftedBinarySearchTest extends TestCase
{

    /**
     * Write a function that takes in a sorted array of distinct integers as well as a target
     * integer. The caveat is that the integers in the array have been shifted by
     * some amount; in other words, they've been moved to the left or to the right by
     * one or more positions. For example, [1, 2, 3, 4] might have
     * turned into [3, 4, 1, 2].
     *
     * The function should use a variation of the Binary Search algorithm to
     * determine if the target integer is contained in the array and should return
     * its index if it is, otherwise -1.
     *
     * If you're unfamiliar with Binary Search, we recommend watching the Conceptual
     * Overview section of the Binary Search question's video explanation before
     * starting to code.
     *
     * Sample Input
     * array = [45, 61, 71, 72, 73, 0, 1, 21, 33, 37]
     * target = 33
     *
     * Sample Output
     * 8
     * https://www.algoexpert.io/questions/shifted-binary-search
     *
     * @dataProvider provider
     * @test
     */
    public function shifted_binary_search_test($arr, $target, $expected)
    {
        $this->assertSame($expected, ShiftedBinarySearch::search($arr, $target));
    }

    public static function provider()
    {

        return [
            [[45, 61, 71, 72, 73, 0, 1, 21, 33, 37], 33, 8],
            [[0, 1, 21, 33, 37, 45, 61, 71, 72, 73], 38, -1],
            [[5, 23, 111, 1], 111, 2],
            [[111, 1, 5, 23], 5, 2],
            [[23, 111, 1, 5], 35, -1],
            [[61, 71, 72, 73, 0, 1, 21, 33, 37, 45], 33, 7],
            [[72, 73, 0, 1, 21, 33, 37, 45, 61, 71], 72, 0],
            [[71, 72, 73, 0, 1, 21, 33, 37, 45, 61], 73, 2],
            [[73, 0, 1, 21, 33, 37, 45, 61, 71, 72], 70, -1],
            [[33, 37, 45, 61, 71, 72, 73, 355, 0, 1, 21], 355, 7],
            [[33, 37, 45, 61, 71, 72, 73, 355, 0, 1, 21], 354, -1],
        ];
    }
}
