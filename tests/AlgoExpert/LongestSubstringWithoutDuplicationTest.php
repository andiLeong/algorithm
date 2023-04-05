<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\LongestSubstringWithoutDuplication;
use PHPUnit\Framework\TestCase;

class LongestSubstringWithoutDuplicationTest extends TestCase
{

    /**
     * Write a function that takes in a string and returns its longest substring
     * without duplicate characters.
     *
     * You can assume that there will only be one longest substring without duplication.
     * Sample Input
     * string = "clementisacap"
     *
     * Sample Output
     * "mentisac"
     * https://www.algoexpert.io/questions/longest-substring-without-duplication
     *
     * @dataProvider provider
     * @test
     */
    public function longest_substring_without_duplication_test($str, $expected)
    {
        $this->assertSame($expected, LongestSubstringWithoutDuplication::find($str));
    }

    public static function provider()
    {

        return [
            ['clementisacap', 'mentisac'],
            ['abcdeabcdefc', 'abcdef'],
            ['abccdeaabbcddef', 'cdea'],
            ['abacacacaaabacaaaeaaafa', 'bac'],
            ['abcdabcef', 'dabcef'],
            ['abcbde', 'cbde'],
            ['clementisanarm', 'mentisa'],
            ['a', 'a'],
            ['abc', 'abc'],
            ['abcb', 'abc'],
        ];
    }
}
