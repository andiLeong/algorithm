<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\ApartmentHunting;
use PHPUnit\Framework\TestCase;

class ApartmentHuntingTest extends TestCase
{
    /**
     * given a list of contiguous blocks on that street where each block contains an
     * apartment that you could move into.
     *
     * You also have a list of requirements: a list of buildings that are important
     * to you. For instance, you might value having a school and a gym near your
     * apartment. The list of blocks that you have contains information at every
     * block about all of the buildings that are present and absent at the block in
     * question. For instance, for every block, you might know whether a school, a
     * pool, an office, and a gym are present.
     *
     * In order to optimize your life, you want to pick an apartment block such that
     * you minimize the farthest distance you'd have to walk from your apartment to
     * reach any of your required buildings.
     *
     * Write a function that takes in a list of contiguous blocks on a specific
     * street and a list of your required buildings and that returns the location
     * (the index) of the block that's most optimal for you.
     *
     * If there are multiple most optimal blocks, your function can return the index
     * of any one of them.
     *
     * Sample Input
     * blocks = [
     * {
     * "gym": false,
     * "school": true,
     * "store": false,
     * },
     * {
     * "gym": true,
     * "school": false,
     * "store": false,
     * },
     * {
     * "gym": true,
     * "school": true,
     * "store": false,
     * },
     * {
     * "gym": false,
     * "school": true,
     * "store": false,
     * },
     * {
     * "gym": false,
     * "school": true,
     * "store": true,
     * },
     * ]
     * reqs = ["gym", "school", "store"]
     *
     * Sample Output
     * 3 // at index 3, the farthest you'd have to walk to reach a gym, a school, or a store is 1 block; at any other index, you'd have to walk farther
     * https://www.algoexpert.io/questions/apartment-hunting
     *
     * @dataProvider provider
     * @test
     */
    public function apartment_hunting_test($block, $requirement, $result)
    {
        $this->assertSame($result, ApartmentHunting::find($block, $requirement));
    }

    public static function provider()
    {
        return [
            [
                [
                    [
                        "gym" => false,
                        "school" => true,
                        "store" => false
                    ],
                    [
                        "gym" => true,
                        "school" => false,
                        "store" => false
                    ],
                    [
                        "gym" => true,
                        "school" => true,
                        "store" => false
                    ],
                    [
                        "gym" => false,
                        "school" => true,
                        "store" => false
                    ],
                    [
                        "gym" => false,
                        "school" => true,
                        "store" => true
                    ]
                ],
                ["gym", "school", "store"],
                3
            ],
            [
                [
                    [
                        'gym' => false,
                        'office' => true,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'gym' => true,
                        'office' => false,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'gym' => true,
                        'office' => false,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'office' => false,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'office' => false,
                        'school' => true,
                        'store' => true
                    ]
                ],
                ["gym", "office", "school", "store"],
                2
            ],
            [
                [
                    [
                        'gym' => false,
                        'office' => true,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'gym' => true,
                        'office' => false,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'gym' => true,
                        'office' => false,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'office' => false,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'office' => false,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'office' => false,
                        'school' => true,
                        'store' => true
                    ]
                ],
                ["gym", "office", "school", "store"],
                2
            ],
            [
                [
                    [
                        'foo' => true,
                        'gym' => false,
                        'kappa' => false,
                        'office' => true,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'foo' => true,
                        'gym' => true,
                        'kappa' => false,
                        'office' => false,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'foo' => true,
                        'gym' => true,
                        'kappa' => false,
                        'office' => false,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'foo' => true,
                        'gym' => false,
                        'kappa' => false,
                        'office' => false,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'foo' => true,
                        'gym' => true,
                        'kappa' => false,
                        'office' => false,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'foo' => true,
                        'gym' => false,
                        'kappa' => false,
                        'office' => false,
                        'school' => true,
                        'store' => true
                    ]
                ],
                ["gym", "school", "store"],
                4
            ],
            [
                [
                    [
                        'gym' => true,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'school' => false,
                        'store' => true
                    ],
                    [
                        'gym' => true,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'school' => true,
                        'store' => false
                    ]
                ],
                ["gym", "school", "store"],
                2
            ],
            [
                [
                    ['gym' => true, 'pool' => false, 'school' => true, 'store' => false],
                    ['gym' => false, 'pool' => false, 'school' => false, 'store' => false],
                    ['gym' => false, 'pool' => false, 'school' => true, 'store' => false],
                    ['gym' => false, 'pool' => false, 'school' => false, 'store' => false],
                    ['gym' => false, 'pool' => false, 'school' => false, 'store' => true],
                    ['gym' => true, 'pool' => false, 'school' => false, 'store' => false],
                    ['gym' => false, 'pool' => false, 'school' => false, 'store' => false],
                    ['gym' => false, 'pool' => false, 'school' => false, 'store' => false],
                    ['gym' => false, 'pool' => false, 'school' => false, 'store' => false],
                    ['gym' => false, 'pool' => false, 'school' => true, 'store' => false],
                    ['gym' => false, 'pool' => true, 'school' => false, 'store' => false]
                ],
                ["gym", "pool", "school", "store"],
                7
            ],
            [
                [
                    [
                        'gym' => true,
                        'office' => false,
                        'pool' => false,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'office' => false,
                        'pool' => false,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'office' => true,
                        'pool' => false,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'office' => true,
                        'pool' => false,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'office' => false,
                        'pool' => false,
                        'school' => false,
                        'store' => true
                    ],
                    [
                        'gym' => true,
                        'office' => true,
                        'pool' => false,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'office' => false,
                        'pool' => true,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'office' => false,
                        'pool' => false,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'office' => false,
                        'pool' => false,
                        'school' => false,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'office' => false,
                        'pool' => false,
                        'school' => true,
                        'store' => false
                    ],
                    [
                        'gym' => false,
                        'office' => false,
                        'pool' => true,
                        'school' => false,
                        'store' => false
                    ]
                ],
                ["gym", "pool", "school", "store"],
                4
            ],
        ];
    }
}
