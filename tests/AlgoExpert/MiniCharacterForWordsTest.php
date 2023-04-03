<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\MiniCharacterForWords;
use PHPUnit\Framework\TestCase;

class MiniCharacterForWordsTest extends TestCase
{

    /**
     * Write a function that takes in an array of words and returns the smallest
     * array of characters needed to form all of the words. The characters don't need
     * to be in any particular order.
     *
     * For example, the characters ["y", "r", "o", "u"] are needed to
     * form the words ["your", "you", "or", "yo"].
     *
     * Note: the input words won't contain any spaces; however, they might contain
     * punctuation and/or special characters.
     *
     * Sample Input
     * words = ["this", "that", "did", "deed", "them!", "a"]
     *
     * Sample Output
     * ["t", "t", "h", "i", "s", "a", "d", "d", "e", "e", "m", "!"]
     * // The characters could be ordered differently.
     * https://www.algoexpert.io/questions/minimum-characters-for-words
     *
     * @dataProvider provider
     * @test
     */
    public function mini_character_for_words_test($arr, $expected)
    {
        $this->assertSame($expected, MiniCharacterForWords::find($arr));
    }

    public static function provider()
    {

        return [
            [
                ["this", "that", "did", "deed", "them!", "a"],
                ['t', 't', 'h', 'i', 's', 'a', 'd', 'd', 'e', 'm', '!']
            ],
            [
                ["your", "you", "or", "yo"],
                ["y", "o", "u", "r"]
            ],
        ];
    }
}
