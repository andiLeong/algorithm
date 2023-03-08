<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\CountingSort;
use PHPUnit\Framework\TestCase;

class CountingSortTest extends TestCase
{

    /**
     * @dataProvider provider
     * @test
     */
    public function counting_sort_test($arr, $expected)
    {
        CountingSort::sort($arr);
        $this->assertSame($expected, $arr);
    }

    public static function provider()
    {
        return [
            [[4, 2, 2, 8, 3, 3, 1], [1, 2, 2, 3, 3, 4, 8]],
            [[234, 5, 10, 12, 2], [2, 5, 10, 12, 234]],
            [
                [4, 7, 3, 3, -4, 0],
                [-4, 0, 3, 3, 4, 7]
            ],
            [
                [5, -2, 2, -8, 3, -10, -6, -1, 2, -2, 9, 1, 1],
                [-10, -8, -6, -2, -2, -1, 1, 1, 2, 2, 3, 5, 9]
            ],
        ];
    }
}
