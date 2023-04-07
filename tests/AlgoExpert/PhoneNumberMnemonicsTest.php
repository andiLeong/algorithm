<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\PhoneNumberMnemonics;
use PHPUnit\Framework\TestCase;

class PhoneNumberMnemonicsTest extends TestCase
{

    /**
     * If you open the keypad of your mobile phone, it'll likely look like this:
     * ----- ----- -----
     * |     |     |     |
     * |  1  |  2  |  3  |
     * |     | abc | def |
     * ----- ----- -----
     * |     |     |     |
     * |  4  |  5  |  6  |
     * | ghi | jkl | mno |
     * ----- ----- -----
     * |     |     |     |
     * |  7  |  8  |  9  |
     * | pqrs| tuv | wxyz|
     * ----- ----- -----
     * |     |
     * |  0  |
     * |     |
     * -----
     *
     * Almost every digit is associated with some letters in the alphabet; this
     * allows certain phone numbers to spell out actual words. For example, the phone
     * number 8464747328 can be written as timisgreat;
     * similarly, the phone number 2686463 can be written as
     * antoine or as ant6463.
     *
     * It's important to note that a phone number doesn't represent a single sequence
     * of letters, but rather multiple combinations of letters. For instance, the
     * digit 2 can represent three different letters (a, b, and c).
     *
     * A mnemonic is defined as a pattern of letters, ideas, or associations that
     * assist in remembering something. Companies oftentimes use a mnemonic for their
     * phone number to make it easier to remember.
     *
     * Given a stringified phone number of any non-zero length, write a function that
     * returns all mnemonics for this phone number, in any order.
     *
     * For this problem, a valid mnemonic may only contain letters and the digits
     * 0 and 1. In other words, if a digit is able to be
     * represented by a letter, then it must be. Digits 0 and
     * 1 are the only two digits that don't have letter representations
     * on the keypad.
     *
     * Note that you should rely on the keypad illustrated above for digit-letter
     * associations.
     *
     * Sample Input
     * phoneNumber = "1905"
     *
     * Sample Output
     * [
     * "1w0j",
     * "1w0k",
     * "1w0l",
     * "1x0j",
     * "1x0k",
     * "1x0l",
     * "1y0j",
     * "1y0k",
     * "1y0l",
     * "1z0j",
     * "1z0k",
     * "1z0l",
     * ]
     * // The mnemonics could be ordered differently.
     * https://www.algoexpert.io/questions/phone-number-mnemonics
     *
     * @dataProvider provider
     * @test
     */
    public function phone_number_mnemonics_test($number, $expected)
    {
        $this->assertSame($expected, PhoneNumberMnemonics::find($number));
    }

    public static function provider()
    {

        return [
            ['23', ["ad", "ae", "af", "bd", "be", "bf", "cd", "ce", "cf"]],
            ['123', ["1ad", "1ae", "1af", "1bd", "1be", "1bf", "1cd", "1ce", "1cf"]],
            [
                '1234',
                [
                    "1adg",
                    "1adh",
                    "1adi",
                    "1aeg",
                    "1aeh",
                    "1aei",
                    "1afg",
                    "1afh",
                    "1afi",
                    "1bdg",
                    "1bdh",
                    "1bdi",
                    "1beg",
                    "1beh",
                    "1bei",
                    "1bfg",
                    "1bfh",
                    "1bfi",
                    "1cdg",
                    "1cdh",
                    "1cdi",
                    "1ceg",
                    "1ceh",
                    "1cei",
                    "1cfg",
                    "1cfh",
                    "1cfi"
                ]
            ],
            ['2', ['a', 'b', 'c']],
        ];
    }
}
