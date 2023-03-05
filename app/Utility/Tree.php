<?php

namespace App\Utility;

class Tree
{
    public function __construct(
        public $value,
        public $id = null,
        public $left = null,
        public $right = null
    )
    {
        //
    }

}