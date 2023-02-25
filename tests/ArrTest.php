<?php

namespace Tests;

use App\Arr;
use PHPUnit\Framework\TestCase;

class ArrTest extends TestCase
{

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
}
