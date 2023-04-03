<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\LargestNumberOfSum;
use PHPUnit\Framework\TestCase;

class LargestNumberOfSumTest extends TestCase
{

    /**
     * get any 2 numbers of sum inside array thant compare to x
     * if results of any 2 numbers all larger than x return -1
     * else get the largest number that is smaller than x  out of the result
     * eg [1,5,3] those are results of sum , than compare to x 99 , this should return 5
     *
     * @dataProvider provider
     * @test
     */
    public function largest_number_sum_test($arr, $target, $expected)
    {
        $this->assertSame($expected, LargestNumberOfSum::sum($arr, $target));
    }

    public static function provider()
    {

        return [
            [[1, 2, 3, 4, 20], 20, 24],
            [[1, 2, 3, 0, 20], 20, 23],
            [[-1, -2, -10], -4, -3],
            [[1, 2, 3, 4], 10, 7],
            [[20, 30, 10, 50, 89], 10, -1],
            [[20, 30, 10, 50, 89], 140, 139],
            [[5, 90, 13, 25, 56, 10, 2, 8, 9, 99], 200, 189],
            [[39, 41, 70, 8], 79, 111],
            [[1, 2, 3, 4], 1, -1],
            [[5, 7, 4, 9], 3, -1],
            [[5, 7, 4, 9, -3], 3, 16],
        ];
    }
}
