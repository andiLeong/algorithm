<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\GroupAnagrams;
use PHPUnit\Framework\TestCase;

class GroupAnagramsTest extends TestCase
{

    /**
     * Write a function that takes in an array of strings and groups anagrams together.
     *
     * Anagrams are strings made up of exactly the same letters, where order doesn't
     * matter. For example, "cinema" and "iceman" are
     * anagrams; similarly, "foo" and "ofo" are anagrams.
     *
     * Your function should return a list of anagram groups in no particular order.
     *
     * Sample Input
     * words = ["yo", "act", "flop", "tac", "foo", "cat", "oy", "olfp"]
     *
     * Sample Output
     * [["yo", "oy"], ["flop", "olfp"], ["act", "tac", "cat"], ["foo"]]
     * https://www.algoexpert.io/questions/group-anagrams
     *
     * @dataProvider provider
     * @test
     */
    public function group_anagrams_test($arr, $expected)
    {
        $this->assertSame($expected, GroupAnagrams::group($arr));
    }

    public static function provider()
    {

        return [
            [
                ["yo", "act", "flop", "tac", "foo", "cat", "oy", "olfp"],
                [
                    ["yo", "oy"],
                    ["act", "tac", "cat"],
                    ["flop", "olfp"],
                    ["foo"]
                ],
            ],
        ];
    }
}
