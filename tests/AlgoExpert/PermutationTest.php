<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\Permutation;
use PHPUnit\Framework\TestCase;

class PermutationTest extends TestCase
{

    /**
     * Write a function that takes in an array of unique integers and returns an
     * array of all permutations of those integers in no particular order.
     *
     * If the input array is empty, the function should return an empty array.
     * Sample Input
     * array = [1, 2, 3]
     *
     * Sample Output
     * [[1, 2, 3], [1, 3, 2], [2, 1, 3], [2, 3, 1], [3, 1, 2], [3, 2, 1]]
     * https://www.algoexpert.io/questions/permutations
     *
     * @dataProvider provider
     * @test
     */
    public function permutation_test($arr, $expected)
    {
        $this->assertSame($expected, Permutation::find($arr));
    }

    public static function provider()
    {
        return [
            [
                [1, 2, 3],
                [
                    [1, 2, 3],
                    [1, 3, 2],
                    [2, 1, 3],
                    [2, 3, 1],
                    [3, 1, 2],
                    [3, 2, 1]
                ]
            ],
            [
                [1, 2, 3, 4],
                [
                    [1, 2, 3, 4],
                    [1, 2, 4, 3],
                    [1, 3, 2, 4],
                    [1, 3, 4, 2],
                    [1, 4, 2, 3],
                    [1, 4, 3, 2],
                    [2, 1, 3, 4],
                    [2, 1, 4, 3],
                    [2, 3, 1, 4],
                    [2, 3, 4, 1],
                    [2, 4, 1, 3],
                    [2, 4, 3, 1],
                    [3, 1, 2, 4],
                    [3, 1, 4, 2],
                    [3, 2, 1, 4],
                    [3, 2, 4, 1],
                    [3, 4, 1, 2],
                    [3, 4, 2, 1],
                    [4, 1, 2, 3],
                    [4, 1, 3, 2],
                    [4, 2, 1, 3],
                    [4, 2, 3, 1],
                    [4, 3, 1, 2],
                    [4, 3, 2, 1]
                ]
            ],
            [
                [1, 2],
                [
                    [1, 2],
                    [2, 1]
                ]
            ],
            [
                [1],
                [
                    [1],
                ]
            ],
            [
                [],
                []
            ]
        ];
    }
}
