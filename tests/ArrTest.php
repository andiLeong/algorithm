<?php

namespace Tests;

use App\Arr;
use PHPUnit\Framework\TestCase;

class ArrTest extends TestCase
{
    /**
     * @dataProvider valuesCountProvider
     * @test
     */
    public function it_can_break_down_array_in_value_count($arr, $expected)
    {
        $this->assertSame($expected, Arr::valuesCount($arr));
    }

    /**
     * @dataProvider uniqueProvider
     * @test
     */
    public function it_can_get_unique_items_from_array($arr, $expected)
    {
        $this->assertSame($expected, Arr::unique($arr));
    }

    /**
     * @dataProvider countProvider
     * @test
     */
    public function it_can_get_array_size($arr, $expected)
    {
        $this->assertSame($expected, Arr::size($arr));
    }

    /**
     * @dataProvider flipProvider
     * @test
     */
    public function it_can_flip_the_array($arr, $expected)
    {
        $this->assertSame($expected, Arr::flip($arr));
    }

    /**
     * @dataProvider reverseProvider
     * @test
     */
    public function it_can_reverse_the_array($arr, $expected)
    {
        $this->assertSame($expected, Arr::reverse($arr));
    }

    /**
     * @dataProvider reverseWithKeyProvider
     * @test
     */
    public function it_can_reverse_the_array_while_keep_the_key($arr, $expected)
    {
        $this->assertSame($expected, Arr::reverse($arr, true));
    }

    /**
     * @dataProvider intersectionProvider
     * @test
     */
    public function it_can_check_the_intersection_of_two_array($arr, $arr2, $expected)
    {
        $this->assertSame($expected, Arr::intersection($arr, $arr2));
    }

    /** @test */
    public function it_can_get_next_item_of_an_array()
    {
        $arr = [3, 4, 7, 9];
        $asso = ['foo' => 'bar', 'baz' => 'bala', 'third' => 'last'];
        $this->assertSame(7, Arr::next($arr, 1));
        $this->assertSame(7, Arr::next($arr, 0, 2));
        $this->assertNull(Arr::next($arr, 0, 4));
        $this->assertNull(Arr::next($arr, 3));

        $this->assertSame('last', Arr::next($asso, 'baz'));
        $this->assertSame('last', Arr::next($asso, 'foo', 'third'));
        $this->assertNull(Arr::next($asso, 'third'));
        $this->assertNull(Arr::next($asso, null, 'no'));


        $this->expectException(\InvalidArgumentException::class);
        Arr::next($arr);
    }

    public static function valuesCountProvider()
    {
        return [
            [[3, 4, 4, 4, 6, 6, 6], [3 => 1, 4 => 3, 6 => 3]],
            [['foo', 'foo', 'bar', 'baz', 'bar'], ['foo' => 2, 'bar' => 2, 'baz' => 1]],
        ];
    }

    public static function flipProvider()
    {
        return [
            [['foo' => 'bar', 'baz' => 'bax'], ['bar' => 'foo', 'bax' => 'baz']],
            [['foo' => 'bar', 'baz' => 'bar'], ['bar' => 'baz']],
        ];
    }

    public static function reverseProvider()
    {
        return [
            [[0, 1, 2, 3, 4, 5, 6, 7, 8, 9], [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]],
            [
                ['foo' => 'bar', 'hey', 'name' => 'andrew', 'hello'],
                [0 => 'hello', 'name' => 'andrew', 1 => 'hey', 'foo' => 'bar']
            ],
        ];
    }

    public static function reverseWithKeyProvider()
    {
        return [
            [[0,1,2,3, 'foo' => 'bar', 4], [
                4 => 4,
                'foo' => 'bar',
                3 => 3,
                2 => 2,
                1 => 1,
                0 => 0,
            ]],
            [
                ['foo' => 'bar', 'hey', 'name' => 'andrew', 'hello'],
                [1 => 'hello', 'name' => 'andrew', 0 => 'hey', 'foo' => 'bar']
            ],
        ];
    }

    public static function intersectionProvider()
    {
        return [
            [[1, 2, 2, 1], [2], [1 => 2, 2 => 2]],
            [[1, 2, 2, 1], [2, 3, 2], [1 => 2, 2 => 2]],
            [['foo' => 'bar'], ['hi' => 'bar'], ['foo' => 'bar']],
            [['foo' => 'bar', 'fb' => 'bar'], ['hi' => 'bar'], ['foo' => 'bar', 'fb' => 'bar']],
        ];
    }

    public static function uniqueProvider()
    {
        return [
            [[4, '4', '3', 3], [0 => 4, 2 => '3']],
            [
                ['a' => 'green', 'red', 'b' => 'green', 'blue', 'red'],
                ['a' => 'green', 0 => 'red', 1 => 'blue']
            ],
        ];
    }

    public static function countProvider()
    {
        return [
            [[4, '4', '3', 3], 4],
        ];
    }

}
