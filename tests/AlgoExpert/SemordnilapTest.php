<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\Semordnilap;
use PHPUnit\Framework\TestCase;

class SemordnilapTest extends TestCase
{

    /**
     * Write a function that takes in a list of unique strings and returns a list of
     * semordnilap pairs.
     *
     * A semordnilap pair is defined as a set of different strings where the reverse
     * of one word is the same as the forward version of the other. For example the
     * words "diaper" and "repaid" are a semordnilap pair, as are the words
     * "palindromes" and "semordnilap".
     *
     * The order of the returned pairs and the order of the strings within each pair
     * does not matter.
     *
     * Sample Input
     * words = ["diaper", "abc", "test", "cba", "repaid"]
     *
     * Sample Output
     * [["diaper", "repaid"], ["abc", "cba"]]
     * https://www.algoexpert.io/questions/semordnilap
     *
     * @dataProvider provider
     * @test
     */
    public function semordnilap_test($arr, $expected)
    {
        $this->assertSame($expected, Semordnilap::pair($arr));
    }

    public static function provider()
    {

        return [
            [["dog", "hello", "god"], [["dog", "god"]]],
            [["diaper", "abc", "test", "cba", "repaid"], [["diaper", "repaid"], ["abc", "cba"]]],
            [["aaa", "bbbb"], []],
            [[], []],
            [
                ["dog", "desserts", "god", "stressed"],
                [
                    ["dog", "god"],
                    ["desserts", "stressed"]
                ]
            ],
            [
                ["dog", "hello", "desserts", "test", "god", "stressed"],
                [
                    ["dog", "god"],
                    ["desserts", "stressed"]
                ]
            ],
            [
                ["abcde", "edcba", "edbc", "edb", "cbde", "abc"],
                [
                    ["abcde", "edcba"],
                    ["edbc", 'cbde']
                ]
            ],
            [
                ["abcde", "bcd", "dcb", "edcba", "aaa"],
                [
                    ["abcde", "edcba"],
                    ["bcd", "dcb"]
                ]
            ],
            [["abcdefghijk", "aaa", "hello", "racecar", "kjihgfedcba"], [["abcdefghijk", "kjihgfedcba"]]],
        ];
    }
}
