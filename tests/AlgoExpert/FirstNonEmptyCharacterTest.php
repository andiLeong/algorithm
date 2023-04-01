<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\FirstNonEmptyCharacter;
use PHPUnit\Framework\TestCase;

class FirstNonEmptyCharacterTest extends TestCase
{

    /**
     * Write a function that takes in a string of lowercase English-alphabet letters
     * and returns the index of the string's first non-repeating character.
     *
     * The first non-repeating character is the first character in a string that
     * occurs only once.
     *
     * If the input string doesn't have any non-repeating characters, your function
     * should return -1.
     * Sample Input
     * string = "abcdcaf"
     * Sample Output
     * 1 // The first non-repeating character is "b" and is found at index 1.
     * https://www.algoexpert.io/questions/first-non-repeating-character
     *
     * @dataProvider provider
     * @test
     */
    public function first_non_empty_character_test($arr, $expected)
    {
        $this->assertSame($expected, FirstNonEmptyCharacter::find($arr));
    }

    public static function provider()
    {

        return [
            ['abcdcaf', 1],
            ['faadabcbbebdf', 6],
            ['a', 0],
            ['ab', 0],
            ['abc', 0],
            ['abac', 1],
            ['ababac', 5],
            ['ababacc', -1],
            ['lmnopqldsafmnopqsa', 7],
            ['abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxy', 25],
            ['abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz', -1],
            ['', -1],
            ['ggyllaylacrhdzedddjsc', 10],
            ['aaaaaaaaaaaaaaaaaaaabbbbbbbbbbcccccccccccdddddddddddeeeeeeeeffghgh', -1],
            ['aabbccddeeff', -1],
        ];
    }
}
