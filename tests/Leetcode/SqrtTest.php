<?php

namespace Tests\Leetcode;

use App\Leetcode\Sqrt;
use PHPUnit\Framework\TestCase;

class SqrtTest extends testcase
{

    /**
     * Given a non-negative integer x, return the square root of x rounded down to the nearest integer. The returned integer should be non-negative as well.
     * You must not use any built-in exponent function or operator.
     * For example, do not use pow(x, 0.5) in c++ or x ** 0.5 in python.
     *
     * https://leetcode.com/problems/sqrtx/
     *
     * @dataProvider provider
     * @test
     */
    public function square_root_test($number, $result)
    {
        $this->assertSame($result, Sqrt::calculate($number));
    }

    public static function provider()
    {
        return [
            [4,2],
            [8,2],
        ];
    }
}