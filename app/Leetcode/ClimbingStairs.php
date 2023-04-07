<?php

namespace App\Leetcode;

use App\AlgoExpert\StaircaseTraversal;

class ClimbingStairs
{

    public static function start($steps)
    {
        return StaircaseTraversal::calculate($steps, 2);
    }

}