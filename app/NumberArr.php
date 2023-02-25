<?php

namespace App;

class NumberArr
{
    public function __construct(protected array $item)
    {
        if (!array_is_list($item)) {
            throw new \InvalidArgumentException('only number index array is allowed');
        }
    }

    public static function make(array $item)
    {
        return new static($item);
    }

    /**
     * get the next item
     * @param int $index
     * @return mixed|null
     */
    public function next(int $index)
    {
        return Arr::next($this->item, $index);
    }

    /**
     * find the smallest integer of the item
     * @noinspection PhpConditionCanBeReplacedWithMinMaxCallInspection
     */
    public function smallest()
    {
        $smallest = 0;

        foreach ($this->item as $key => $value) {
            $next = $this->next($key);
            if (is_null($next)) {
                break;
            }
            $small = $value < $next ? $value : $next;

            if ($key === 0) {
                $smallest = $small;
                continue;
            }

            if ($small < $smallest) {
                $smallest = $small;
            }

        }

        return $smallest;

        //we can use min function here though
        //min($this->item);
    }

    /**
     * generate range of number array
     * @param $min
     * @param $max
     * @return array
     */
    public static function range($min, $max)
    {
        //can use array range function

        $times = $max - $min;
        $res = [];

        for ($x = 0; $x <= $times ; $x++) {
            $res[] = $min + $x;
        }

        return $res;
    }
}