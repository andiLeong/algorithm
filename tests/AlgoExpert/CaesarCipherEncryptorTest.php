<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\CaesarCipherEncryptor;
use PHPUnit\Framework\TestCase;

class CaesarCipherEncryptorTest extends TestCase
{

    /**
     * Given a non-empty string of lowercase letters and a non-negative integer
     * representing a key, write a function that returns a new string obtained by
     * shifting every letter in the input string by k positions in the alphabet,
     * where k is the key.
     *
     * Note that letters should "wrap" around the alphabet; in other words, the
     * letter z shifted by one returns the letter a.
     *
     * Sample Input
     * string = "xyz"
     * key = 2
     *
     * Sample Output
     * "zab"
     * https://www.algoexpert.io/questions/caesar-cipher-encryptor
     *
     * @dataProvider provider
     * @test
     */
    public function caesar_cipher_encryptor_test_solution_one($str, $key, $expected)
    {
        $this->assertSame($expected, CaesarCipherEncryptor::solutionOne($str, $key));
    }

    /**
     * @dataProvider provider
     * @test
     */
    public function caesar_cipher_encryptor_test_solution_two($str, $key, $expected)
    {
        $this->assertSame($expected, CaesarCipherEncryptor::solutionTwo($str, $key));
    }

    public static function provider()
    {

        return [
            ['xyz', 2, 'zab'],
            ['abc', 0, 'abc'],
            ['abc', 3, 'def'],
            ['xyz', 5, 'cde'],
            ['abc', 26, 'abc'],
            ['abc', 52, 'abc'],
            ['abc', 57, 'fgh'],
            ['xyz', 25, 'wxy'],
            ['iwufqnkqkqoolxzzlzihqfm', 25, 'hvtepmjpjpnnkwyykyhgpel'],
            ['ovmqkwtujqmfkao', 52, 'ovmqkwtujqmfkao'],
            ['mvklahvjcnbwqvtutmfafkwiuagjkzmzwgf', 7, 'tcrshocqjuidxcabatmhmrdpbhnqrgtgdnm'],
            [
                'kjwmntauvjjnmsagwgawkagfuaugjhawgnawgjhawjgawbfawghesh',
                15,
                'zylbcipjkyycbhpvlvplzpvujpjvywplvcplvywplyvplquplvwthw'
            ],
        ];
    }
}
