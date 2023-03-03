<?php

namespace Tests;

use App\Leetcode\ValidPalindrome;
use PHPUnit\Framework\TestCase;

class ValidPalindromeTest extends testcase
{

    /**
     * A phrase is a palindrome if, after converting all uppercase letters into lowercase letters and removing all non-alphanumeric characters,
     * it reads the same forward and backward.
     * Alphanumeric characters include letters and numbers.
     * Given a string s, return true if it is a palindrome, or false otherwise.
     * https://leetcode.com/problems/valid-palindrome/description/
     *
     * @dataProvider provider
     * @test
     */
    public function valid_palindrome_test($string, $result)
    {
        $this->assertSame($result, ValidPalindrome::validate($string));
    }

    public static function provider()
    {
        return [
            ['A man, a plan, a canal: Panama', true],
            ['race a car', false],
            [' ', true],
        ];
    }
}