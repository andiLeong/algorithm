<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\OneEdit;
use PHPUnit\Framework\TestCase;

class OneDitTest extends TestCase
{

    /**
     * You're given two strings stringOne and stringTwo.
     * Write a function that determines if these two strings can be made equal
     * using only one edit.
     *
     * There are 3 possible edits:
     *
     * Replace: One character in one string is swapped for a different
     * character.
     *
     * Add: One character is added at any index in one string.
     *
     * Remove: One character is removed at any index in one string.
     *
     * Note that both strings will contain at least one character. If the strings
     * are the same, your function should return true.
     *
     * Sample Input
     * stringOne = "hello"
     * stringTwo = "hollo"
     *
     * Sample Output
     * True // A single replace at index 1 of either string can make the strings equal
     * https://www.algoexpert.io/questions/one-edit
     *
     * @dataProvider provider
     * @test
     */
    public function one_edit_test($str, $str2, $expected)
    {
        $this->assertSame($expected, OneEdit::edit($str, $str2));
    }

    public static function provider()
    {
        return [
            ['hello', 'hollo', true],
            ['hello', 'hello', true],
            ['hello', 'holla', false],
            ['hello', 'hllo', true],
            ['hello', 'hllq', false],
            ['hllo', 'hello', true],
            ['hllq', 'hello', false],
            ['hl', 'hello', false],
            ['a', 'b', true],
            ['ab', 'b', true],
            ['abc', 'b', false],
            ['bb', 'a', false],
            ['hello', 'hellos', true],
            ['abcdefghijklmnopqrstuvwxyz', 'abcdefghijklmnopqrstuvwxyz', true],
            ['bcdefghijklmnopqrstuvwxyz', 'abcdefghijklmnopqrstuvwxyz', true],
            ['bcdefgijklmnopqrstuvwxyz', 'abcdefghijklmnopqrstuvwxyz', false],
            ['bcdefghijklmnopqrstuvwxyz', 'acdefghijklmnopqrstuvwxyz', true],
            ['bcdefghijklmnopqrstuvwxyz', 'abdefghijklmnopqrstuvwxyz', false],
            ['bcdefghijklmnopqrstuvwxyz', 'abcdefghijklmnopqrstuvwxyza', false],
            ['abcdefghijklmnopqrstuvwxyz', 'abcdefghijklnopqrstuvwxyz', true],
            ['abcdefghijklmnopqrstuvwxyz', 'abcdefghijklnopqrstuvwxyz', true],
            ['abcdefghijklmnopqrstuvwxyz', 'abcdefghijklmmnopqrstuvwxyz', true],
            ['abcdefghijklmnopqrstuvwxyz', 'abcdefghijklnnopqrstuvwxyz', true],
        ];
    }
}
