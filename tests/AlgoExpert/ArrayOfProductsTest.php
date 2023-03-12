<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\ArrayOfProducts;
use PHPUnit\Framework\TestCase;

class ArrayOfProductsTest extends TestCase
{
    /**
     * Write a function that takes in a non-empty array of integers and returns an
     * array of the same length, where each element in the output array is equal to
     * the product of every other number in the input array.
     *
     * In other words, the value at output[i] is equal to the product of
     * every number in the input array other than input[i].
     *
     * Note that you're expected to solve this problem without using division.
     * Sample Input
     * array = [5, 1, 4, 2]
     *
     * Sample Output
     * [8, 40, 10, 20]
     * // 8 is equal to 1 x 4 x 2
     * // 40 is equal to 5 x 4 x 2
     * // 10 is equal to 5 x 1 x 2
     * // 20 is equal to 5 x 1 x 4
     *
     * https://www.algoexpert.io/questions/array-of-products
     *
     * @dataProvider provider
     * @test
     */
    public function calculate_array_of_product($arr, $result)
    {
        $this->assertSame($result, ArrayOfProducts::calculate($arr));
    }

    public static function provider()
    {
        return [
            [[5, 1, 4, 2], [8, 40, 10, 20]],
            [[1, 8, 6, 2, 4], [384, 48, 64, 192, 96]],
            [[-5, 2, -4, 14, -6], [672, -1680, 840, -240, 560]],
            [[9, 3, 2, 1, 9, 5, 3, 2], [1620, 4860, 7290, 14580, 1620, 2916, 4860, 7290]],
            [[4, 4], [4, 4]],
            [[0, 0, 0, 0], [0, 0, 0, 0]],
            [[1, 1, 1, 1], [1, 1, 1, 1]],
            [[-1, -1, -1], [1, 1, 1]],
            [[-1, -1, -1, -1], [-1, -1, -1, -1]],
            [[0, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9], [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]],
            [[0, 1, 2, 3, 4, 5, 6, 7, 8, 9], [362880, 0, 0, 0, 0, 0, 0, 0, 0, 0]],
        ];
    }
}
