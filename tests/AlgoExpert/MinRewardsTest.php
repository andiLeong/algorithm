<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\MinRewards;
use PHPUnit\Framework\TestCase;

class MinRewardsTest extends TestCase
{

    /**
     * Imagine that you're a teacher who's just graded the final exam in a class. You
     * have a list of student scores on the final exam in a particular order (not
     * necessarily sorted), and you want to reward your students. You decide to do so
     * fairly by giving them arbitrary rewards following two rules:
     *
     * All students must receive at least one reward.
     *
     * Any given student must receive strictly more rewards than an adjacent
     * student (a student immediately to the left or to the right) with a lower
     * score and must receive strictly fewer rewards than an adjacent student with
     * a higher score.
     *
     * Write a function that takes in a list of scores and returns the minimum number
     * of rewards that you must give out to students to satisfy the two rules.
     *
     * You can assume that all students have different scores; in other words, the
     * scores are all unique.
     * Sample Input
     * scores = [8, 4, 2, 1, 3, 6, 7, 9, 5]
     *
     * Sample Output
     * 25 // you would give out the following rewards: [4, 3, 2, 1, 2, 3, 4, 5, 1]
     * https://www.algoexpert.io/questions/min-rewards
     *
     * @dataProvider provider
     * @test
     */
    public function min_rewards_test($arr, $expected)
    {
        $this->assertSame($expected, MinRewards::find($arr));
    }

    public static function provider()
    {
        return [
            [[8, 4, 2, 1, 3, 6, 7, 9, 5], 25],
            [[6, 7, 9, 5, 4, 3, 2, 1], 24],
            [[1], 1],
            [[5, 10], 3],
            [[10, 5], 3],
            [[4, 2, 1, 3], 8],
            [[0, 4, 2, 1, 3], 9],
            [[2, 20, 13, 12, 11, 8, 4, 3, 1, 5, 6, 7, 9, 0], 52],
            [[2, 1, 4, 3, 6, 5, 8, 7, 10, 9], 15],
            [
                [
                    800,
                    400,
                    20,
                    10,
                    30,
                    61,
                    70,
                    90,
                    17,
                    21,
                    22,
                    13,
                    12,
                    11,
                    8,
                    4,
                    2,
                    1,
                    3,
                    6,
                    7,
                    9,
                    0,
                    68,
                    55,
                    67,
                    57,
                    60,
                    51,
                    661,
                    50,
                    65,
                    53
                ],
                93
            ],
        ];
    }
}
