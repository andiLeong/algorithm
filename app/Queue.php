<?php

namespace App;

class Queue
{
    protected $item = [];

    public function push($item): void
    {
        $this->item[] = $item;
    }

    public function pop()
    {
        return array_shift($this->item);
    }

    public function peek()
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