<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\SortedSquareArray;
use PHPUnit\Framework\TestCase;

class SortedSquareArrayTest extends TestCase
{

    /**
     * Write a function that takes in a non-empty array of integers that are sorted
     * in ascending order and returns a new array of the same length with the squares
     * of the original integers also sorted in ascending order.
     *
     * Sample Input
     * array = [1, 2, 3, 5, 6, 8, 9]
     *
     * Sample Output
     * [1, 4, 9, 25, 36, 64, 81]
     * https://www.algoexpert.io/questions/sorted-squared-array
     *
     * @dataProvider provider
     * @test
     */
    public function it_can_sort_square_array($arr, $res)
    {
        $this->assertSame($res, SortedSquareArray::sort($arr));
    }

    public function provider()
    {
        return [
            [[1, 2, 3, 5, 6, 8, 9], [1, 4, 9, 25, 36, 64, 81]],
            [[1], [1]],
            [[1, 2], [1, 4]],
            [[1, 2, 3, 4, 5], [1, 4, 9, 16, 25]],
            [[0], [0]],
            [[-1], [1]],
            [[-2, -1], [1, 4]],
            [[-5, -4, -3, -2, -1], [1, 4, 9, 16, 25]],
            [[-10, -5, 0, 5, 10], [0, 25, 25, 100, 100]],
            [[-50, -13, -2, -1, 0, 0, 1, 1, 2, 3, 19, 20], [0, 0, 1, 1, 1, 4, 4, 9, 169, 361, 400, 2500]],
        ];
    }
}
