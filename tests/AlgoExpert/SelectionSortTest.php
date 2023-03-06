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
        ];
    }
}
