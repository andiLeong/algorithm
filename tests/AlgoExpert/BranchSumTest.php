<?php

namespace Tests\AlgoExpert;

use App\AlgoExpert\BranchSum;
use App\Utility\Tree;
use PHPUnit\Framework\TestCase;

class BranchSumTest extends TestCase
{
    /**
     * @dataProvider provider
     * @test
     */
    public function it_can_get_tree_branch_sum($tree, $result)
    {
        $this->assertSame($result, BranchSum::sum($tree));
    }

    public static function generateTree($value, $id = null, $left = null, $right = null)
    {
        return new Tree($value, $id, $left, $right);
    }

    public static function provider()
    {
        return [
            [self::buildTree(), [15, 16, 18, 10, 11],],
        ];
    }

    public static function buildTree()
    {
        $six = self::generateTree(6, '5', null, null);
        $seven = self::generateTree(7, '6', null, null);
        $eight = self::generateTree(8, '7', null, null);
        $nine = self::generateTree(9, '8', null, null);
        $ten = self::generateTree(10, '9', null, null);
        $five = self::generateTree(5, '4', $ten, null);
        $four = self::generateTree(4, '3', $eight, $nine);
        $three = self::generateTree(3, '2', $six, $seven);
        $two = self::generateTree(2, '1', $four, $five);

        return self::generateTree(1, '0', $two, $three);
    }

}
