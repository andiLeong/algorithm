<?php

namespace App\AlgoExpert;

class Palindrome
{
    public static function check($str)
    {
        $size = strlen($str);
        $left = 0;
        $right = $size - 1;

        while ($left < $right) {
            if ($str[$left] !== $str[$right]) {
                return false;
            }

            $left++;
            $right--;
        }

        return true;

        // At each iteration in the for loop, the first solution adds a character to the reversedString.
        // In most languages where strings are immutable, adding a character to a string involves re-creating the entire string,
        // which in turn involves iterating through every character in the string (an O(n)-time operation).
        // This, the first solution has us perform an O(n)-time operation at each iteration in the for loop,
        // leading to an O(n^2)-time algorithm overall.
        $reverse = '';
        for ($i = $size - 1; $i >= 0; $i--) {
            $reverse .= $str[$i];
        }

        return $str === $reverse;
    }
}