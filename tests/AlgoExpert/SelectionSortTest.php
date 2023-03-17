<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\SelectionSort;
use PHPUnit\Framework\TestCase;

class SelectionSortTest extends TestCase
{

    /**
     * https://www.algoexpert.io/questions/insertion-sort
     * @dataProvider provider
     * @test
     */
    public function it_can_sort_array_using_selection_sort_algo($arr, $expected)
    {
        SelectionSort::sort($arr);
        $this->assertSame($expected, $arr);
    }

    public static function provider()
    {
        return [
            [[5, 43, 2, 6, 0, 1], [0, 1, 2, 5, 6, 43]],
            [[8, 5, 2, 9, 5, 6, 3], [2, 3, 5, 5, 6, 8, 9]],
            [[1, 2, 7, 10, 11, 12, 6, 16, 18, 19], [1, 2, 6, 7, 10, 11, 12, 16, 18, 19]],
            [
                [4, 1, 5, 0, -9, -3, -3, 9, 3, -4, -9, 8, 1, -3, -7, -4, -9, -1, -7, -2, -7, 4],
                [-9, -9, -9, -7, -7, -7, -4, -4, -3, -3, -3, -2, -1, 0, 1, 1, 3, 4, 4, 5, 8, 9]
            ],
        ];
    }
}
