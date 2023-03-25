<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\BinarySearch;
use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{

    /**
     * Write a function that takes in a sorted array of integers as well as a target
     * integer. The function should use the Binary Search algorithm to determine if
     * the target integer is contained in the array and should return its index if it
     * is, otherwise -1.
     *
     * If you're unfamiliar with Binary Search, we recommend watching the Conceptual
     * Overview section of this question's video explanation before starting to code.
     *
     * Sample Input
     * array = [0, 1, 21, 33, 45, 45, 61, 71, 72, 73]
     * target = 33
     *
     * Sample Output
     * 3
     * https://www.algoexpert.io/questions/binary-search
     *
     * @dataProvider provider
     * @test
     */
    public function binary_search_test($arr, $target, $expected)
    {
        $this->assertSame($expected, BinarySearch::search($arr, $target));
    }

    public static function provider()
    {

        return [
            [[0, 1, 21, 33, 45, 45, 61, 71, 72, 73], 33, 3],
            [[1, 5, 23, 111], 111, 3],
            [[1, 5, 23, 111], 5, 1],
            [[1, 5, 23, 111], 35, -1],
            [[0, 1, 21, 33, 45, 45, 61, 71, 72, 73], 0, 0],
            [[0, 1, 21, 33, 45, 45, 61, 71, 72, 73], 1, 1],
            [[0, 1, 21, 33, 45, 45, 61, 71, 72, 73], 21, 2],
            [[0, 1, 21, 33, 45, 45, 61, 71, 72, 73], 45, 4],
            [[0, 1, 21, 33, 45, 45, 61, 71, 72, 73], 61, 6],
            [[0, 1, 21, 33, 45, 45, 61, 71, 72, 73], 71, 7],
            [[0, 1, 21, 33, 45, 45, 61, 71, 72, 73], 72, 8],
            [[0, 1, 21, 33, 45, 45, 61, 71, 72, 73], 73, 9],
            [[0, 1, 21, 33, 45, 45, 61, 71, 72, 73], 70, -1],
            [[0, 1, 21, 33, 45, 45, 61, 71, 72, 73, 355], 355, 10],
            [[0, 1, 21, 33, 45, 45, 61, 71, 72, 73, 355], 354, -1],
            [[1, 5, 23, 111], 120, -1],
            [[5, 23, 111], 3, -1],
        ];
    }
}
