<?php

namespace Tests;

use App\Number;
use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{

    /**
     * @dataProvider lastDigitsProvider
     * @test
     */
    public function it_can_get_last_x_digits_from_the_end_of_number($number, $length, $expected)
    {
        $this->assertSame($expected, Number::getLastDigits($number, $length));
    }

    /**
     * @dataProvider reverseNumberProvider
     * @test
     */
    public function it_can_revert_a_number($number, $expected)
    {
        $this->assertSame($expected, Number::reverse($number));
    }

    public static function reverseNumberProvider()
    {
        return [
            [1234,4321],
            [23,32],
            [2000,0002],
            [1990,991],
            [0,0],
            [-1965,-5691],
            [-456,-654],
        ];
    }

    public static function lastDigitsProvider()
    {
        return [
            [1998, 1, 8],
            [1998, 2, 98],
            [1998, 3, 998],
            [1998, 4, 1998],
            [1998, 5, 1998],
            [1998, 50, 1998],
            [1998, 0, 1998],
            [1998, -1, 1998],
            [-1998, 3, -998],
        ];
    }
}
