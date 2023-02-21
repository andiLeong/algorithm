<?php

namespace Tests;

use App\LongestCommonString;
use PHPUnit\Framework\TestCase;

class LongCommonStringTest extends testcase
{
    /**
     * Write a function to find the longest common prefix string amongst an array of strings.
     * If there is no common prefix, return an empty string "".
     * https://leetcode.com/problems/longest-common-prefix/description/
     *
     * @dataProvider arrayProvider
     * @test
     */
    public function fin_the_longest_common_prefix_string($array, $expected)
    {
        $this->assertSame($expected, LongestCommonString::find($array));
    }

    public static function arrayProvider()
    {
        return [
            [['andy','anthony','abcd'], 'a'],
            [['andy','juliet','abcd'], ''],
            [["flower","float","flow","flight"], 'fl'],
            [["flower","float","flow","flight","fabc"], 'f'],
        ];
    }
}