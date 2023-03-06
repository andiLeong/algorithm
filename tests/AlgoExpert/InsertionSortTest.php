<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\InsertionSort;
use PHPUnit\Framework\TestCase;

class InsertionSortTest extends TestCase
{

    /**
     * Write a function that takes in an array of integers and returns a sorted
     * version of that array. Use the Insertion Sort algorithm to sort the array.
     *
     * If you're unfamiliar with Insertion Sort, we recommend watching the Conceptual
     * Overview section of this question's video explanation before starting to code.
     *
     * Sample Input
     * array = [8, 5, 2, 9, 5, 6, 3]
     *
     * Sample Output
     * [2, 3, 5, 5, 6, 8, 9]
     *
     * https://www.algoexpert.io/questions/insertion-sort
     * @dataProvider provider
     * @test
     */
    public function it_can_insertion_sort_array($arr, $expected)
    {
        InsertionSort::sort($arr);
        $this->assertSame($expected, $arr);
    }

    public static function provider()
    {
        return [
            [[5, 43, 2, 6, 1, 0], [0, 1, 2, 5, 6, 43]],
            [[8, 5, 2, 9, 5, 6, 3], [2, 3, 5, 5, 6, 8, 9]],
        ];
    }
}
