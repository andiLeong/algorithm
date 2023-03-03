<?php

namespace App\Leetcode;

class Stack
{
    protected $item = [];

    public function push($item): void
    {
        array_unshift($this->item, $item);
    }

    public function pop()
    {
        return array_shift($this->item);
    }

    public function top()
    {
        if (!$this->empty()) {
            return $this->item[0];
        }
    }

    public function empty(): bool
    {
        return empty($this->item);
    }
}