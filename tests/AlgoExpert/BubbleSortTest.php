<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\BubbleSort;
use PHPUnit\Framework\TestCase;

class BubbleSortTest extends TestCase
{

    /**
     * Write a function that takes in an array of integers and returns a sorted
     * version of that array. Use the Bubble Sort algorithm to sort the array.
     *
     * If you're unfamiliar with Bubble Sort, we recommend watching the Conceptual
     * Overview section of this question's video explanation before starting to code.
     *
     * Sample Input
     * array = [8, 5, 2, 9, 5, 6, 3]
     *
     * Sample Output
     * [2, 3, 5, 5, 6, 8, 9]
     *
     * https://www.algoexpert.io/questions/bubble-sort
     * @dataProvider provider
     * @test
     */
    public function it_can_bubble_sort_array($arr, $expected)
    {
        BubbleSort::sort($arr);
        $this->assertSame($expected, $arr);
    }

    /**
     * @dataProvider sortCallbackProvider
     * @test
     */
    public function it_can_bubble_sort_array_using_callback($arr, $fn, $expected)
    {
        BubbleSort::sort($arr, $fn);
        $this->assertSame($expected, $arr);
    }

    public static function provider()
    {
        return [
            [[5, 1, 4, 2, 8], [1, 2, 4, 5, 8]],
            [[5, 43, 2, 6, 1, 0], [0, 1, 2, 5, 6, 43]],
            [[8, 5, 2, 9, 5, 6, 3], [2, 3, 5, 5, 6, 8, 9]],
        ];
    }

    public static function sortCallbackProvider()
    {
        return [
            [[5, 1, 4, 2, 8], function ($a, $b) {
                return $a < $b;
            }, [8, 5, 4, 2, 1]],
            [[5, 1, 4, 2, 8], function ($a, $b) {
                return $a < 3;
            }, [5, 4, 8, 2, 1]],
            [[2, 3, 6, 7, 4, 5], function ($a, $b) {
                return $a % 2 !== 0;
            }, [2, 6, 4, 5, 7, 3]],
        ];
    }
}
