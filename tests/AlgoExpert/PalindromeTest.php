<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\Palindrome;
use PHPUnit\Framework\TestCase;

class PalindromeTest extends TestCase
{

    /**
     * Write a function that takes in a non-empty string and that returns a boolean
     * representing whether the string is a palindrome.
     *
     * A palindrome is defined as a string that's written the same forward and
     * backward. Note that single-character strings are palindromes.
     *
     * Sample Input
     * string = "abcdcba"
     * Sample Output
     * true // it's written the same forward and backward
     * https://www.algoexpert.io/questions/palindrome-check
     *
     * @dataProvider provider
     * @test
     */
    public function palindrome_check($str, $expected)
    {
        $this->assertSame($expected, Palindrome::check($str));
    }

    public static function provider()
    {

        return [
            ['abcdcba', true],
            ['a', true],
            ['ab', false],
            ['aba', true],
            ['abb', false],
            ['abba', true],
            ['abcdefghhgfedcba', true],
            ['abcdefghihgfedcba', true],
            ['abcdefghihgfeddcba', false],
        ];
    }
}
