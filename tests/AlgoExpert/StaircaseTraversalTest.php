<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\StaircaseTraversal;
use PHPUnit\Framework\TestCase;

class StaircaseTraversalTest extends TestCase
{

    /**
     * You're given two positive integers representing the height of a staircase and
     * the maximum number of steps that you can advance up the staircase at a time.
     * Write a function that returns the number of ways in which you can climb the
     * staircase.
     *
     * For example, if you were given a staircase of height = 3 and
     * maxSteps = 2 you could climb the staircase in 3 ways. You could
     * take 1 step, 1 step, then 1 step, you could also take
     * 1 step, then 2 steps, and you could take 2 steps, then 1 step.
     *
     * Note that maxSteps = height will always be true.
     * Sample Input
     * height = 4
     * maxSteps = 2
     *
     * Sample Output
     * 5
     * // You can climb the staircase in the following ways:
     * // 1, 1, 1, 1
     * // 1, 1, 2
     * // 1, 2, 1
     * // 2, 1, 1
     * // 2, 2
     * https://www.algoexpert.io/questions/staircase-traversal
     *
     * @dataProvider provider
     * @test
     */
    public function staircase_traversal_test($height, $maxSteps, $expected)
    {
        $this->assertSame($expected, StaircaseTraversal::calculate($height, $maxSteps));
    }

    public static function provider()
    {

        return [
            [4, 2, 5],
            [4, 4, 8],
            [4, 3, 7],
            [10, 1, 1],
            [10, 2, 89],
            [1, 1, 1],
            [5, 2, 8],
            [6, 2, 13],
            [100, 1, 1],
            [15, 5, 13624],
            [7, 2, 21],
            [6, 3, 24],
            [3, 2, 3],
        ];
    }
}
