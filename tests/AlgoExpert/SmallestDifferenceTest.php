<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\SmallestDifference;
use PHPUnit\Framework\TestCase;

class SmallestDifferenceTest extends TestCase
{

    /**
     * Write a function that takes in two non-empty arrays of integers, finds the
     * pair of numbers (one from each array) whose absolute difference is closest to
     * zero, and returns an array containing these two numbers, with the number from
     * the first array in the first position.
     *
     * Note that the absolute difference of two integers is the distance between
     * them on the real number line. For example, the absolute difference of -5 and 5
     * is 10, and the absolute difference of -5 and -4 is 1.
     *
     * You can assume that there will only be one pair of numbers with the smallest
     * difference.
     *
     * Sample Input
     * arrayOne = [-1, 5, 10, 20, 28, 3]
     * arrayTwo = [26, 134, 135, 15, 17]
     *
     * Sample Output
     * [28, 26]
     * https://www.algoexpert.io/questions/smallest-difference
     *
     * @dataProvider provider
     * @test
     */
    public function smallest_difference_test($arr, $arr2, $expected)
    {
        $this->assertSame($expected, SmallestDifference::find($arr, $arr2));
    }

    public static function provider()
    {
        return [
            [[-1, 5, 10, 20, 28, 3], [26, 134, 135, 15, 17], [28, 26]],
            [[-1, 5, 10, 20, 3], [26, 134, 135, 15, 17], [20, 17]],
            [[10, 0, 20, 25], [1005, 1006, 1014, 1032, 1031], [25, 1005]],
            [[10, 0, 20, 25, 2200], [1005, 1006, 1014, 1032, 1031], [25, 1005]],
            [[10, 0, 20, 25, 2000], [1005, 1006, 1014, 1032, 1031], [2000, 1032]],
            [[240, 124, 86, 111, 2, 84, 954, 27, 89], [1, 3, 954, 19, 8], [954, 954]],
            [[0, 20], [21, -2], [20, 21]],
            [[10, 1000], [-1441, -124, -25, 1014, 1500, 660, 410, 245, 530], [1000, 1014]],
            [[10, 1000, 9124, 2142, 59, 24, 596, 591, 124, -123], [-1441, -124, -25, 1014, 1500, 660, 410, 245, 530], [-123, -124]],
            [[10, 1000, 9124, 2142, 59, 24, 596, 591, 124, -123, 530], [-1441, -124, -25, 1014, 1500, 660, 410, 245, 530], [530, 530]],
        ];
    }
}
