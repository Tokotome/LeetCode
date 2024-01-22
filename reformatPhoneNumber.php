<?php 
// https://leetcode.com/problems/reformat-phone-number/description

// You are given a phone number as a string number. number consists of digits, spaces ' ', and/or dashes '-'.
// You would like to reformat the phone number in a certain manner. Firstly, remove all spaces and dashes. 
// Then, group the digits from left to right into blocks of length 3 until there are 4 or fewer digits. The final digits are then grouped as follows:
// 2 digits: A single block of length 2.
// 3 digits: A single block of length 3.
// 4 digits: Two blocks of length 2 each.
// The blocks are then joined by dashes. Notice that the reformatting process should never produce any blocks of length 1 
// and produce at most two blocks of length 2.
// Return the phone number after formatting.

class Solution {

    /**
     * @param String $number
     * @return String
     */
    function reformatNumber($number) {
        $number = str_replace([' ', '-'], '', $number);
        $rest = strlen($number) % 3;
        
        if($rest == 0 || $rest == 2) {
            $number = str_split($number, 3);
            
        } 

        if($rest == 1) {
            $number = str_split($number, 3);
            $lastThreeDigit = $number[count($number) - 2];
            $lastDigit = substr($lastThreeDigit,-1);
            $number[count($number) - 2] = substr($number[count($number) - 2], 0, -1);
            $number[count($number) - 1] = $lastDigit.$number[count($number) - 1];
        }

        $number = implode('-', $number);
        return  $number;
    }
}

$sol = new Solution;
$sol->reformatNumber('123 4-567');
?>