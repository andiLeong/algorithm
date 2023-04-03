<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\BaseballScore;
use PHPUnit\Framework\TestCase;

class BaseballScoreTest extends TestCase
{

    /**
     * get a baseball game score based on the rule
     * if we see special symbol we need to sum | double | remove the score
     * + sum previous 2 scores
     * D double previous score
     * C remove previous score
     *
     * @dataProvider provider
     * @test
     */
    public function baseball_score_calculation_test($arr, $expected)
    {
        $this->assertSame($expected, BaseballScore::calculate($arr));
    }

    public static function provider()
    {

        return [
            [['2', '5', 'D', '+', 'C'], 17],
            [['10', 'D', '+', '1', 'C'], 60],
            [[20, 'C', 10, 3, '+', 'D'], 52],
            [[3, 'C', 4, 5, 6, 'D', 'C', '+', 1], 27],
            [[2, 'D', 4, 'C', '+'], 12],
            [[1, 'C', 0, 2, '+', 'C'], 2],
        ];
    }
}
