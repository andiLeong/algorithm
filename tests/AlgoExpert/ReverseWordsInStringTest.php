<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\ReversedWordsInString;
use PHPUnit\Framework\TestCase;

class ReverseWordsInStringTest extends TestCase
{

    /**
     * Write a function that takes in a string of words separated by one or more
     * whitespaces and returns a string that has these words in reverse order. For
     * example, given the string "tim is great", your function should
     * return "great is tim".
     *
     * For this problem, a word can contain special characters, punctuation, and
     * numbers. The words in the string will be separated by one or more whitespaces,
     * and the reversed string must contain the same whitespaces as the original
     * string. For example, given the string
     * "whitespaces    4" you would be expected to return
     * "4    whitespaces".
     *
     * Note that you're not allowed to to use any built-in
     * split or reverse methods/functions. However, you
     * are allowed to use a built-in join method/function.
     *
     * Also note that the input string isn't guaranteed to always contain words.
     * Sample Input
     * string = "Tim is the best!"
     *
     * Sample Output
     * "best! the is Tim"
     * https://www.algoexpert.io/questions/reverse-words-in-string
     *
     * @dataProvider provider
     * @test
     */
    public function reverse_words_in_string_test($str, $expected)
    {
        $this->assertSame($expected, ReversedWordsInString::reverse($str));
    }

    public static function provider()
    {

        return [
            ['Tim is Great', 'Great is Tim'],
            ['whitespaces    4', '4    whitespaces'],
            ['Reverse These Words', 'Words These Reverse'],
            ['..H,, hello 678', '678 hello ..H,,'],
            ['this this words this this this words this', 'this words this this this words this this'],
            ['1 12 23 34 56', '56 34 23 12 1'],
            ['APPLE PEAR PLUM ORANGE', 'ORANGE PLUM PEAR APPLE'],
            ['this-is-one-word', 'this-is-one-word'],
            ['a', 'a'],
            ['ab', 'ab'],
            ['', ''],
            ['words, separated, by, commas', 'commas by, separated, words,'],
            [
                'this      string     has a     lot of   whitespace',
                'whitespace   of lot     a has     string      this'
            ],
            ['a ab a', 'a ab a'],
            ['test        ', '        test'],
            [' ', ' '],
            [' Tim is Great', 'Great is Tim '],
        ];
    }
}
