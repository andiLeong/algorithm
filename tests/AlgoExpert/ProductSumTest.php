<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\ProductSum;
use PHPUnit\Framework\TestCase;

class ProductSumTest extends TestCase
{

    /**
     * Write a function that takes in a "special" array and returns its product sum.
     * A "special" array is a non-empty array that contains either integers or other"special" arrays.
     * The product sum of a "special" array is the sum of its elements, where "special" arrays inside it are summed themselves
     * and then multiplied by their level of depth.
     * The depth of a "special" array is how far nested it is. For instance, the
     * depth of [] is 1; the depth of the inner array in [[]] is 2; the depth of the innermost array in [[[]]] is 3.
     * Therefore, the product sum of [x, y] is x + y;
     * the product sum of [x, [y, z]] is x + 2 * (y + z);
     * the product sum of [x, [y, [z]]] is x + 2 * (y + 3z).
     * Sample Input
     * array = [5, 2, [7, -1], 3, [6, [-13, 8], 4]]
     * Sample Output
     * 12 // calculated as: 5 + 2 + 2 * (7 - 1) + 3 + 2 * (6 + 3 * (-13 + 8) + 4)
     *
     * https://www.algoexpert.io/questions/product-sum
     *
     * @dataProvider provider
     * @test
     */
    public function it_can_sum_product($arr, $result)
    {
        $this->assertSame($result, ProductSum::sum($arr));
    }

    public static function provider()
    {
        return [
            [[5, 2, [7, -1], 3, [6, [-13, 8], 4]], 12],
            [[1, 2, [3], 4, 5], 18],
            [[1, 2, 3, 4, 5], 15],
            [[[1, 2], 3, [4, 5]], 6 + 3 + 18],
            [
                [
                    [
                        [
                            [
                                [5]
                            ]
                        ]
                    ]
                ],
                600
            ],
            [
                [9, [2, -3, 4], 1, [1, 1, [1, 1, 1]], [[[[3, 4, 1]]], 8], [1, 2, 3, 4, 5, [6, 7], -7], [1, [2, 3, [4, 5]], [6, 0, [7, 0, -8]], -7], [1, -3, 2, [1, -3, 2, [1, -3, 2], [1, -3, 2, [1, -3, 2]], [1, -3, 2]]], -3],
                1351
            ]
        ];
    }
}
