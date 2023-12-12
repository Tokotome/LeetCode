<?php
// https://leetcode.com/problems/roman-to-integer
//Roman numerals are usually written largest to smallest from left to right. 
//However, the numeral for four is not IIII. Instead, the number four is written as IV. 
//Because the one is before the five we subtract it making four. 
//The same principle applies to the number nine, which is written as IX. 
//There are six instances where subtraction is used:
//Given a roman numeral, convert it to an integer.

function romanToInt($input) {
    $input = strtr(
        $input,
        [
            'M' => '1000,',
            'CM' => '900,',
            'D' => '500,',
            'CD' => '400,',
            'C' => '100,',
            'XC' => '90,',
            'L' => '50,',
            'XL' => '40,',
            'X' => '10,',
            'IX' => '9,',
            'V' => '5,',
            'IV' => '4',
            'I' => '1,'
        ]
    );
    return array_sum(explode(',', $input));
}
?>