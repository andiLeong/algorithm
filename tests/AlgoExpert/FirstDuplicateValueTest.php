<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\FirstDuplicateValue;
use PHPUnit\Framework\TestCase;

class FirstDuplicateValueTest extends TestCase
{
    /**
     * Given an array of integers between 1 and n,
     * inclusive, where n is the length of the array, write a function
     * that returns the first integer that appears more than once (when the array is
     * read from left to right).
     *
     * In other words, out of all the integers that might occur more than once in the
     * input array, your function should return the one whose first duplicate value
     * has the minimum index.
     *
     * If no integer appears more than once, your function should return
     * -1.
     *
     * Note that you're allowed to mutate the input array.
     * Sample Input #1
     * array = [2, 1, 5, 2, 3, 3, 4]
     *
     * Sample Output #1
     * 2 // 2 is the first integer that appears more than once.
     * // 3 also appears more than once, but the second 3 appears after the second 2.
     *
     * Sample Input #2
     * array = [2, 1, 5, 3, 3, 2, 4]
     *
     * Sample Output #2
     * 3 // 3 is the first integer that appears more than once.
     * // 2 also appears more than once, but the second 2 appears after the second 3.
     *
     * https://www.algoexpert.io/questions/first-duplicate-value
     *
     * @dataProvider provider
     * @test
     */
    public function find_duplicate_value_from_array($arr, $result)
    {
        $this->assertSame($result, FirstDuplicateValue::find($arr));
    }

    public static function provider()
    {
        return [
            [[2, 1, 5, 2, 3, 3, 4], 2],
            [[2, 1, 5, 0, 9, 2], 2],
            [[2, 1, 5, 3, 3, 2, 4], 3],
            [[1, 1, 2, 3, 3, 2, 2], 1],
            [[3, 1, 3, 1, 1, 4, 4], 3],
            [[], -1],
            [[1], -1],
            [[1, 1], 1],
            [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 10], 10],
            [[2, 1, 1], 1],
            [[2, 2, 2, 2, 2, 2, 2, 2, 2], 2],
            [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10], -1],
            [[7, 6, 5, 3, 6, 4, 3, 5, 2], 6],
            [[9, 13, 6, 2, 3, 5, 5, 5, 3, 2, 2, 2, 2, 4, 3], 5],
            [[23, 21, 22, 5, 3, 13, 11, 16, 5, 11, 9, 14, 23, 3, 2, 2, 5, 11, 6, 11, 23, 8, 1], 5],
            [[8, 20, 4, 12, 14, 9, 19, 17, 14, 20, 22, 9, 6, 15, 1, 15, 10, 9, 17, 7, 22, 17], 14],
            [[3, 3, 2], 3],
            [[6, 6, 5, 1, 3, 7, 7, 8], 6],
            [
                [23, 25, 9, 26, 2, 19, 24, 18, 25, 17, 13, 3, 14, 17, 9, 20, 26, 15, 21, 2, 6, 11, 2, 12, 23, 5, 4, 20],
                25
            ],
            [[12, 22, 6, 18, 5, 17, 18, 22, 22, 4, 6, 14, 12, 8, 5, 6, 10, 7, 13, 22, 17, 18], 18],
            [[16, 6, 6, 18, 6, 13, 28, 9, 3, 26, 10, 2, 23, 5, 20, 21, 11, 20, 6, 11, 26, 20, 26, 25, 13, 3, 12, 4], 6],
        ];
    }
}
