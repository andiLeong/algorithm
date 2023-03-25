<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\ThreeLargestNumber;
use PHPUnit\Framework\TestCase;

class ThreeLargestNumberTest extends TestCase
{

    /**
     * Write a function that takes in an array of at least three integers and,
     * without sorting the input array, returns a sorted array of the three largest
     * integers in the input array.
     *
     * The function should return duplicate integers if necessary; for example, it
     * should return [10, 10, 12] for an input array of
     * [10, 5, 9, 10, 12].
     *
     * Sample Input
     * array = [141, 1, 17, -7, -17, -27, 18, 541, 8, 7, 7]
     *
     * Sample Output
     * [18, 141, 541]
     * https://www.algoexpert.io/questions/find-three-largest-numbers
     *
     * @dataProvider provider
     * @test
     */
    public function find_three_largest_number_test($arr, $expected)
    {
        $this->assertSame($expected, ThreeLargestNumber::find($arr));
    }

    public static function provider()
    {
        return [
            [[141, 1, 17, -7, -17, -27, 18, 541, 8, 7, 7], [18, 141, 541]],
            [[55, 7, 8], [7, 8, 55]],
            [[55, 43, 11, 3, -3, 10], [11, 43, 55]],
            [[7, 8, 3, 11, 43, 55], [11, 43, 55]],
            [[55, 7, 8, 3, 43, 11], [11, 43, 55]],
            [[7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7], [7, 7, 7]],
            [[7, 7, 7, 7, 7, 7, 8, 7, 7, 7, 7], [7, 7, 8]],
            [[-1, -2, -3, -7, -17, -27, -18, -541, -8, -7, 7], [-2, -1, 7]],
        ];
    }
}
