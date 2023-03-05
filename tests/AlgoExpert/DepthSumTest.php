<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\DepthSum;
use App\Utility\Tree;
use PHPUnit\Framework\TestCase;

class DepthSumTest extends TestCase
{
    /**
     * @dataProvider provider
     * @test
     */
    public function it_can_get_tree_depth_sum($tree, $result)
    {
        $this->assertSame($result, DepthSum::sum($tree));
    }

    public static function generateTree($value, $id = null, $left = null, $right = null)
    {
        return new Tree($value, $id, $left, $right);
    }

    public static function provider()
    {
        return [
            [self::buildTree(), 16],
        ];
    }

    public static function buildTree()
    {
        $six = static::generateTree(6, '5', null, null);
        $seven = static::generateTree(7, '6', null, null);
        $eight = static::generateTree(8, '7', null, null);
        $nine = static::generateTree(9, '8', null, null);
        $five = static::generateTree(5, '4', null, null);
        $four = static::generateTree(4, '3', $eight, $nine);
        $three = static::generateTree(3, '2', $six, $seven);
        $two = static::generateTree(2, '1', $four, $five);

        return static::generateTree(1, '0', $two, $three);
    }

}
