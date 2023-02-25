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
     * @dataProvider flipProvider
     * @test
     */
    public function it_can_flip_the_array($arr, $expected)
    {
        $this->assertSame($expected, Arr::flip($arr));
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
            [[3,4,4,4,6,6,6], [3 => 1, 4 => 3, 6 => 3]],
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
}
