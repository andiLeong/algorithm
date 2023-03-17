<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\FourNumberSum;
use PHPUnit\Framework\TestCase;

class FourNumberSumTest extends TestCase
{

    /**
     * Write a function that takes in a non-empty array of distinct integers and an
     * integer representing a target sum. The function should find all quadruplets in
     * the array that sum up to the target sum and return a two-dimensional array of
     * all these quadruplets in no particular order.
     *
     * If no four numbers sum up to the target sum, the function should return an
     * empty array.
     *
     * Sample Input
     * array = [7, 6, 4, -1, 1, 2]
     * targetSum = 16
     *
     * Sample Output
     * [[7, 6, 4, -1], [7, 6, 1, 2]] // the quadruplets could be ordered differently
     * https://www.algoexpert.io/questions/four-number-sum
     *
     * @dataProvider provider
     * @test
     */
    public function four_number_sum_test($arr, $target, $expected)
    {
        $this->assertSame($expected, FourNumberSum::sum($arr, $target));
    }

    public static function provider()
    {
        return [
            [
                [7, 6, 4, -1, 1, 2],
                16,
                [
                    [7, 6, 4, -1],
                    [7, 6, 1, 2]
                ]
            ],
            [
                [1, 2, 3, 4, 5, 6, 7],
                10,
                [
                    [1, 2, 3, 4],
                ]
            ],
            [
                [5, -5, -2, 2, 3, -3],
                0,
                [
                    [5, -5, -2, 2],
                    [5, -5, 3, -3],
                    [-2, 2, 3, -3]
                ]
            ],
            [
                [-2, -1, 1, 2, 3, 4, 5, 6, 7, 8, 9],
                4,
                [
                    [-2, -1, 1, 6],
                    [-2, 1, 2, 3],
                    [-2, -1, 2, 5],
                    [-2, -1, 3, 4]
                ]
            ],
            [
                [-1, 22, 18, 4, 7, 11, 2, -5, -3],
                30,
                [
                    [-1, 22, 7, 2],
                    [22, 4, 7, -3],
                    [-1, 18, 11, 2],
                    [18, 4, 11, -3],
                    [22, 11, 2, -5]
                ]
            ],
            [
                [-10, -3, -5, 2, 15, -7, 28, -6, 12, 8, 11, 5],
                20,
                [
                    [-5, 2, 15, 8],
                    [-3, 2, -7, 28],
                    [-10, -3, 28, 5],
                    [-10, 28, -6, 8],
                    [-7, 28, -6, 5],
                    [-5, 2, 12, 11],
                    [-5, 12, 8, 5]
                ]
            ],
            [
                [1, 2, 3, 4, 5],
                100,
                []
            ],
            [
                [1, 2, 3, 4, 5, -5, 6, -6],
                5,
                [
                    [2, 3, 5, -5],
                    [1, 4, 5, -5],
                    [2, 4, 5, -6],
                    [1, 3, -5, 6],
                    [2, 3, 6, -6],
                    [1, 4, 6, -6]
                ]
            ]
        ];
    }
}
