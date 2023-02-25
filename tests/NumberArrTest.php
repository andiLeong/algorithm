<?php

namespace Tests;

use App\NumberArr;
use PHPUnit\Framework\TestCase;

class NumberArrTest extends TestCase
{

    /**
     * @dataProvider smallestIntegerProvider
     * @test
     */
    public function it_can_get_smallest_integer($arr, $expected)
    {
        $this->assertSame($expected, NumberArr::make($arr)->smallest());
    }

    /**
     * @dataProvider rangeProvider
     * @test
     */
    public function it_can_generate_range_of_array($min, $max, $expected)
    {
        $this->assertSame($expected, NumberArr::range($min, $max));
    }

    public static function rangeProvider()
    {
        return [
            [4,9, [4,5,6,7,8,9]],
            [-3,2, [-3,-2,-1,0,1,2]],
        ];
    }

    public static function smallestIntegerProvider()
    {
        return [
            [[3, 8, 34, 45, 2, 9], 2],
            [[3, 8, 34, 45, 2, 0], 0],
            [[3, 8, 34, -45, 2, 9], -45],
            [[-1, -2, 0, 2, 9], -2],
        ];
    }
}
