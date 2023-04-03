<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\RepeatedNumberAndCorrectNumber;
use PHPUnit\Framework\TestCase;

class RepeatedNumberAndCorrectNumberTest extends TestCase
{

    /**
     * get the repeated number and correct number (based on the order)
     * eg : [1,2,3,4,3]
     * repeated is 3 , correct number is 5, return [3,5]
     *
     * eg : [1,2,3,4,5,6,4]
     * repeated is 4 , correct number is 7, return [4,7]
     *
     * eg : [1,2,3,4,5,4,4]
     * repeated is 4 , correct number is 6, return [4,6]
     *
     * @dataProvider provider
     * @test
     */
    public function repeated_number_and_correct_number_test($arr, $expected)
    {
        $this->assertSame($expected, RepeatedNumberAndCorrectNumber::get($arr));
    }

    public static function provider()
    {

        return [
            [[1, 2, 3, 4, 3], [3, 5]],
            [[1, 2, 3, 4, 5, 6, 4], [4, 7]],
            [[1, 2, 3, 4, 5, 4, 4], [4, 6]],
        ];
    }
}
