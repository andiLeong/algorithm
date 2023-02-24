<?php

namespace Tests;

use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanToIntegerTest extends testcase
{

    /**
     * Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M.
     *
     * Symbol       Value
     * I             1
     * V             5
     * X             10
     * L             50
     * C             100
     * D             500
     * M             1000
     * For example, 2 is written as II in Roman numeral, just two ones added together. 12 is written as XII, which is simply X + II. The number 27 is written as XXVII, which is XX + V + II.
     *
     * Roman numerals are usually written largest to smallest from left to right. However, the numeral for four is not IIII. Instead, the number four is written as IV. Because the one is before the five we subtract it making four. The same principle applies to the number nine, which is written as IX. There are six instances where subtraction is used:
     *
     * I can be placed before V (5) and X (10) to make 4 and 9.
     * X can be placed before L (50) and C (100) to make 40 and 90.
     * C can be placed before D (500) and M (1000) to make 400 and 900.
     * Given a roman numeral, convert it to an integer.
     * https://leetcode.com/problems/roman-to-integer/
     *
     * @dataProvider romanProvider
     * @test
     */
    public function it_can_convert_roman_number_to_integer($string, $result)
    {
        $this->assertSame($result, RomanNumerals::toInteger($string));
        $this->assertSame($result, RomanNumerals::toInteger($string, 'foreach'));
    }

    /**
     * @dataProvider integerProvider
     * @test
     */
    public function it_can_convert_integer_to_roman_number($number, $expected)
    {
        $this->assertSame($expected, RomanNumerals::toNumeral($number));
    }

    public static function integerProvider()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [40, 'XL'],
            [50, 'L'],
            [90, 'XC'],
            [100, 'C'],
            [400, 'CD'],
            [500, 'D'],
            [900, 'CM'],
            [1000, 'M'],
            [3999, 'MMMCMXCIX']
        ];
    }

    public static function romanProvider()
    {
        return [
            ['I', 1],
            ['III', 3],
            ['IV', 4],
            ['IX', 9],
            ['XL', 40],
            ['XC', 90],
            ['CD', 400],
            ['CM', 900],
            ['MCMXCIV', 1994],
            ['XCIV', 94],
            ['MCDLXXVI', 1476],
            ['MMMXLV', 3045],
            ['LVIII', 58],
        ];
    }
}