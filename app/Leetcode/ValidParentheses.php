<?php

namespace App\Leetcode;

class ValidParentheses
{
    public static function validate(string $string): bool
    {
        $parentheses = [
            ['(', ')'],
            ['[', ']'],
            ['{', '}'],
        ];

        $arr = str_split($string);
        $tem = [];

        foreach ($arr as $value) {

            //if we have opening we push to array
            //else we compare the corresponding opening bracket
            if (in_array($value, ['(', '{', '['])) {
                $tem[] = $value;
                continue;
            }

            $opening = array_values(array_filter($parentheses, fn($v) => in_array($value, $v)))[0][0];
            $previous = array_pop($tem);

            if ($opening !== $previous) {
                return false;
            }

        }

        return empty($tem);
    }
}