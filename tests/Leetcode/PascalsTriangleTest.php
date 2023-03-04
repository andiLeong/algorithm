<?php

namespace Tests\Leetcode;

use App\Leetcode\Triangle;
use PHPUnit\Framework\TestCase;

class PascalsTriangleTest extends testcase
{

    /**
     * Given an integer numRows, return the first numRows of Pascal's triangle.
     * In Pascal's triangle, each number is the sum of the two numbers directly above it as shown:
     * https://leetcode.com/problems/pascals-triangle/
     *
     * @dataProvider provider
     * @test
     */
    public function make_triangle_test($row, $result)
    {
        $this->assertSame($result, Triangle::make($row));
    }

    /**
     * Given an integer rowIndex, return the rowIndexth (0-indexed) row of the Pascal's triangle.
     * In Pascal's triangle, each number is the sum of the two numbers directly above it as shown:
     * https://leetcode.com/problems/pascals-triangle-ii/
     *
     * @dataProvider getTriangleProvider
     * @test
     */
    public function get_triangle_test($row, $result)
    {
        $this->assertSame($result, Triangle::get($row));
    }

    public static function provider()
    {
        return [
            [5, [[1], [1, 1], [1, 2, 1], [1, 3, 3, 1], [1, 4, 6, 4, 1]]],
            [3, [[1], [1, 1], [1, 2, 1]]],
            [4, [[1], [1, 1], [1, 2, 1], [1, 3, 3, 1]]],
            [1, [[1]]],
            [2, [[1], [1, 1]]],
        ];
    }

    public static function getTriangleProvider()
    {
        return [
            [3, [1, 3, 3, 1]],
            [4, [1, 4, 6, 4, 1]],
            [2, [1, 2, 1]],
            [1, [1, 1]],
        ];
    }
}