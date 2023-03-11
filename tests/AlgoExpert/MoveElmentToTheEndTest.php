<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\MoveElementToTheEnd;
use PHPUnit\Framework\TestCase;

class MoveElmentToTheEndTest extends TestCase
{

    /**
     * You're given an array of integers and an integer. Write a function that moves
     * all instances of that integer in the array to the end of the array and returns
     * the array.
     *
     * The function should perform this in place (i.e., it should mutate the input
     * array) and doesn't need to maintain the order of the other integers.
     *
     * Sample Input
     * array = [2, 1, 2, 2, 2, 3, 4, 2]
     * toMove = 2
     *
     * Sample Output
     * [1, 3, 4, 2, 2, 2, 2, 2] // the numbers 1, 3, and 4 could be ordered differently
     * https://www.algoexpert.io/questions/move-element-to-end
     *
     * @dataProvider provider
     * @test
     */
    public function quick_sort_test($arr, $element, $expected)
    {
        MoveElementToTheEnd::Move($arr, $element);
        $this->assertSame($expected, $arr);
    }

    public static function provider()
    {
        return [
            [[2, 1, 2, 2, 2, 3, 4, 2], 2, [4, 1, 3, 2, 2, 2, 2, 2]],
            [[], 3, []],
            [[1, 2, 4, 5, 6], 3, [1, 2, 4, 5, 6]],
            [[3,3,3,3,3], 3, [3,3,3,3,3]],
            [[3, 1, 2, 4, 5], 3, [5,1,2,4,3]],
            [[1, 2, 4, 5, 3], 3, [1, 2, 4, 5, 3]],
            [[1, 2, 3, 4, 5], 3, [1,2,5,4,3]],
            [[2, 4, 2, 5, 6, 2, 2], 2, [6,4,5,2,2,2,2]],
            [[5, 5, 5, 5, 5, 5, 1, 2, 3, 4, 6, 7, 8, 9, 10, 11, 12], 5, [12, 11, 10, 9, 8, 7, 1, 2, 3, 4, 6, 5, 5, 5, 5, 5, 5]],
            [[1, 2, 3, 4, 6, 7, 8, 9, 10, 11, 12, 5, 5, 5, 5, 5, 5], 5, [1, 2, 3, 4, 6, 7, 8, 9, 10, 11, 12, 5, 5, 5, 5, 5, 5]],
            [[5, 1, 2, 5, 5, 3, 4, 6, 7, 5, 8, 9, 10, 11, 5, 5, 12], 5, [12, 1, 2, 11, 10, 3, 4, 6, 7, 9, 8, 5, 5, 5, 5, 5, 5]],
        ];
    }
}
