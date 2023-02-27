<?php

namespace Tests;

use App\ClimbingStairs;
use PHPUnit\Framework\TestCase;

class ClimbingStairTest extends testcase
{

    /**
     * You are climbing a staircase. It takes n steps to reach the top.
     * Each time you can either climb 1 or 2 steps. In how many distinct ways can you climb to the top?
     * https://leetcode.com/problems/climbing-stairs/
     *
     * @dataProvider provider
     * @test
     */
    public function climbing_stair_test($steps, $result)
    {
        $this->markTestSkipped();
//        $this->assertSame($result, ClimbingStairs::start($steps));
    }

    public static function provider()
    {
        return [
//            [3, 3],
//            [2, 2],
            [35, 2],
        ];
    }
}