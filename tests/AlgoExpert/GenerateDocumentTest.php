<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\GenerateDocument;
use PHPUnit\Framework\TestCase;

class GenerateDocumentTest extends TestCase
{

    /**
     * You're given a string of available characters and a string representing a
     * document that you need to generate. Write a function that determines if you
     * can generate the document using the available characters. If you can generate
     * the document, your function should return true; otherwise, it
     * should return false.
     *
     * You're only able to generate the document if the frequency of unique
     * characters in the characters string is greater than or equal to the frequency
     * of unique characters in the document string. For example, if you're given
     * characters = "abcabc" and document = "aabbccc" you
     * cannot generate the document because you're missing one c.
     *
     * The document that you need to create may contain any characters, including
     * special characters, capital letters, numbers, and spaces.
     *
     * Note: you can always generate the empty string ("").
     * Sample Input
     * characters = "Bste!hetsi ogEAxpelrt x "
     * document = "AlgoExpert is the Best!"
     *
     * Sample Output
     * true
     * https://www.algoexpert.io/questions/generate-document
     *
     * @dataProvider provider
     * @test
     */
    public function generate_document_test($str, $document, $expected)
    {
        $this->assertSame($expected, GenerateDocument::generate($str, $document));
    }

    public static function provider()
    {

        return [
            ['abcabc', 'aabbccc', false],
            ['a', 'A', false],
            ['a', 'a', true],
            ['a hsgalhsa sanbjksbdkjba kjx', '', true],
            [' ', 'hello', false],
            ['     ', '     ', true],
            ['aheaollabbhb', 'hello', true],
            ['aheaolabbhb', 'hello', false],
            ['estssa', 'testing', false],
            ['helloworld ', 'hello wOrld', false],
            ['helloworldO', 'hello wOrld', false],
            ['helloworldO ', 'hello wOrld', true],
            ['&*&you^a%^&8766 _=-09     docanCMakemthisdocument', 'Can you make this document &', true],
            ['abcabcabcacbcdaabc', 'bacaccadac', true],
        ];
    }
}
