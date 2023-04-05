<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\NthFibonacci;
use PHPUnit\Framework\TestCase;

class NthFibonacciTest extends TestCase
{

    /**
     * The Fibonacci sequence is defined as follows: the first number of the sequence
     * is 0, the second number is 1, and the nth number is the sum of the (n - 1)th
     * and (n - 2)th numbers. Write a function that takes in an integer
     * n and returns the nth Fibonacci number.
     *
     * Important note: the Fibonacci sequence is often defined with its first two
     * numbers as F0 = 0 and F1 = 1. For the purpose of
     * this question, the first Fibonacci number is F0; therefore,
     * getNthFib(1) is equal to F0, getNthFib(2)
     * is equal to F1, etc..
     *
     * Sample Input #1
     * n = 2
     *
     * Sample Output #1
     * 1 // 0, 1
     *
     * Sample Input #2
     * n = 6
     *
     * Sample Output #2
     * 5 // 0, 1, 1, 2, 3, 5
     * https://www.algoexpert.io/questions/nth-fibonacci
     *
     * @dataProvider provider
     * @test
     */
    public function nth_fibonacci_test_solution_one($number, $expected)
    {
        $this->assertSame($expected, NthFibonacci::solutionOne($number));
    }

    /**
     * @dataProvider provider
     * @test
     */
    public function nth_fibonacci_test_solution_two($number, $expected)
    {
        $this->assertSame($expected, NthFibonacci::solutionTwo($number));
    }

    /**
     * @dataProvider provider
     * @test
     */
    public function nth_fibonacci_test_solution_three($number, $expected)
    {
        $this->assertSame($expected, NthFibonacci::solutionThree($number));
    }

    public static function provider()
    {

        return [
            [6, 5],
            [4, 2],
            [2, 1],
            [1, 0],
            [3, 1],
            [7, 8],
            [8, 13],
            [9, 21],
            [10, 34],
            [11, 55],
            [12, 89],
            [13, 144],
            [14, 233],
            [15, 377],
            [16, 610],
            [17, 987],
            [18, 1597],
        ];
    }
}
