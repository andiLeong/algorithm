<?php

namespace Tests;

use App\Leetcode\PalindromeNumber;
use PHPUnit\Framework\TestCase;

class PalindromeNumberTest extends testcase
{

    /**
     * Given an integer x, return true if x is apalindrome, and false otherwise.
     * An integer is a palindrome when it reads the same forward and backward.
     * For example, 121 is a palindrome while 123 is not.
     * https://leetcode.com/problems/palindrome-number/
     *
     * @dataProvider provider
     * @test
     */
    public function palindrome_number_test($number, $result)
    {
        $this->assertSame($result, PalindromeNumber::validate($number));
    }

    public static function provider()
    {
        return [
            [ 121, true ],
            [ 123, false, ],
            [ 343, true, ],
            [ 589, false, ],
            [ -121, false, ],
        ];
    }
}