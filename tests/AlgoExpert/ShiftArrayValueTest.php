<?php

namespace Tests\AlgoExpert;

use PHPUnit\Framework\TestCase;

class ShiftArrayValueTest extends TestCase
{

    /**
     * shift array value by the take argument to the front
     * eg give below array and take
     * [3,4,5,6,99,56], 4
     * it should return
     * [5,6,99,56,3,4]
     *
     * [1, 2, 3], 4
     * it should return
     * [3,2,1]
     *
     * @dataProvider provider
     * @test
     */
    public function shift_array_value_test_solution_one($arr, $take, $expected)
    {
        $this->assertSame($expected, ShiftArrayValue::solutionOne($arr, $take));
    }

    /**
     * @dataProvider provider
     * @test
     */
    public function shift_array_value_test_solution_two($arr, $take, $expected)
    {
        $this->assertSame($expected, ShiftArrayValue::solutionTwo($arr, $take));
    }

    public static function provider()
    {
        return [
            [[1, 2, 3, 4, 5], 3, [3, 4, 5, 1, 2]],
            //0  1  2  3  4       0  1  2  3  4
            [[1, 2, 3], 1, [3, 1, 2]],
            [[1, 2, 3], 2, [2, 3, 1]],
            [[1, 2, 3], 3, [1, 2, 3]],
            [[1, 2, 3], 4, [3, 1, 2]],
            [[1, 2, 3], 5, [2, 3, 1]],
            [[1, 2, 3], 6, [1, 2, 3]],
            [[1, 2, 3], 28, [3, 1, 2]],
            [[1, 2, 3], 29, [2, 3, 1]],
            [[1, 2, 3], 30, [1, 2, 3]],
        ];
    }
}
