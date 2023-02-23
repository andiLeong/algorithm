<?php

namespace Tests;

use App\ValidParentheses;
use PHPUnit\Framework\TestCase;

class ValidParenthesesTest extends testcase
{

    /**
     * Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.
     * An input string is valid if:
     * Open brackets must be closed by the same type of brackets.
     * Open brackets must be closed in the correct order.
     * Every close bracket has a corresponding open bracket of the same type.
     * https://leetcode.com/problems/valid-parentheses/
     *
     * @dataProvider provider
     * @test
     */
    public function valid_parentheses_test($string, $result)
    {
        $this->assertSame($result, ValidParentheses::validate($string));
    }

    public static function provider()
    {
        return [
            ['()', true],
            ['()[]{}', true],
            ['(]', false],
            ['([)]', false],
            ['{[]}', true],
            ['[', false],
            ['[[', false],
        ];
    }
}