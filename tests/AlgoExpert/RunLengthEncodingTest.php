<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\RunLengthEncoding;
use PHPUnit\Framework\TestCase;

class RunLengthEncodingTest extends TestCase
{

    /**
     * Write a function that takes in a non-empty string and returns its run-length
     * encoding.
     *
     * From Wikipedia, "run-length encoding is a form of lossless data compression in
     * which runs of data are stored as a single data value and count, rather than as
     * the original run." For this problem, a run of data is any sequence of
     * consecutive, identical characters. So the run "AAA" would be
     * run-length-encoded as "3A".
     *
     * To make things more complicated, however, the input string can contain all
     * sorts of special characters, including numbers. And since encoded data must be
     * decodable, this means that we can't naively run-length-encode long runs. For
     * example, the run "AAAAAAAAAAAA" (12 As), can't
     * naively be encoded as "12A", since this string can be decoded as
     * either "AAAAAAAAAAAA" or "1AA". Thus, long runs (runs
     * of 10 or more characters) should be encoded in a split fashion; the
     * aforementioned run should be encoded as "9A3A".
     *
     * Sample Input
     * string = "AAAAAAAAAAAAABBCCCCDD"
     *
     * Sample Output
     * "9A4A2B4C2D"
     * https://www.algoexpert.io/questions/run-length-encoding
     *
     * @dataProvider provider
     * @test
     */
    public function run_length_encoding_test($str, $expected)
    {
        $this->assertSame($expected, RunLengthEncoding::encode($str));
    }

    public static function provider()
    {

        return [
            ['AAAAA', '5A'],
            ['AAAAAAAAA', '9A'],
            ['AAAAAAAAAAAA', '9A3A'],
            ['AAAAAAAAAAAAABBCCCCDDDDDDDDDDDD', '9A4A2B4C9D3D'],
            ['aA', '1a1A'],
            ['122333', '112233'],
            ['************^^^^^^^$$$$$$%%%%%%%!!!!!!AAAAAAAAAAAAAAAAAAAA', '9*3*7^6$7%6!9A9A2A'],
            ['aAaAaaaaaAaaaAAAABbbbBBBB', '1a1A1a1A5a1A3a4A1B3b4B'],
            ['                          ', '9 9 8 '],
            ['1  222 333    444  555', '112 321 334 342 35'],
            ['1A2BB3CCC4DDDD', '111A122B133C144D'],
            ['........______=========AAAA   AAABBBB   BBB', '8.6_9=4A3 3A4B3 3B'],
            ['        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '8 9a9a9a9a9a4a'],
            ['[(aaaaaaa,bbbbbbb,ccccc,dddddd)]', '1[1(7a1,7b1,5c1,6d1)1]'],
            ['AAAAAAAAAAAAABBCCCCDDDDDDDDDDD', '9A4A2B4C9D2D'],
            [
                ';;;;;;;;;;;;\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'1233333332222211112222111s',
                '9;3;9\'9\'2\'111273524142311s'
            ],
        ];
    }
}
