<?php

namespace App\Leetcode;

use App\Utility\NumberArr;

class RomanNumerals
{

    public $specialCalculation = [
        'IV' => 4,
        'IX' => 9,
        'XL' => 40,
        'XC' => 90,
        'CD' => 400,
        'CM' => 900,
    ];

    public $representation = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
        'Z' => 0,
    ];

    const NUMERALS = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    public function __construct(public string|int $value)
    {
        //
    }

    public static function toNumeral(int $number)
    {
        $result = '';

        foreach (static::NUMERALS as $numeral => $arabic) {
            for (; $number >= $arabic; $number -= $arabic) {
                $result .= $numeral;
            }
        }

        return $result;
    }

    public static function toInteger(string $str, $driver = 'reduce')
    {
        $instance = new static($str);
        return $driver === 'reduce'
            ? $instance->toNumberUsingReduce()
            : $instance->toNumberUsingForeach();
    }

    protected function toNumberUsingReduce()
    {
        $arr = str_split($this->value);
        $index = 0;
        $skip = false;

        return array_reduce($arr, function ($carry, $value) use ($arr, &$index, &$skip) {

            $shouldCalculate = true;
            if ($skip) {
                $skip = false;
                $shouldCalculate = false;
            }

            //if we need special calculation, we will get the value, then set the skip flag to true
            //so on the next loop it's not going calculate since we ready did
            if ($number = $this->needSpecialCalculation($value, NumberArr::make($arr)->next($index))) {
                $skip = true;
            } else {
                $number = $this->representation[$value];
            }

            $index++;
            if ($shouldCalculate) {
                $carry += $number;
            }
            return $carry;

        }, 0);
    }

    protected function needSpecialCalculation($value, $next)
    {
        if (isset($next) && array_key_exists($value . $next, $this->specialCalculation)) {
            return $this->specialCalculation[$value . $next];
        }
    }

    protected function toNumberUsingForeach()
    {
        $arr = str_split($this->value);
        $sum = 0;
        foreach ($arr as $index => &$value) {

            if ($number = $this->needSpecialCalculation($value, NumberArr::make($arr)->next($index))) {
                $arr[$index + 1] = 'Z';
            } else {
                $number = $this->representation[$value];
            }

            $sum += $number;
        }

        return $sum;
    }
}