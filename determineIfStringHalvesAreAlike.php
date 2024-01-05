<?php 
// https://leetcode.com/problems/determine-if-string-halves-are-alike

// You are given a string s of even length. Split this string into two halves of equal lengths, 
// and let a be the first half and b be the second half.
// Two strings are alike if they have the same number of vowels ('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'). 
// Notice that s contains uppercase and lowercase letters.
// Return true if a and b are alike. Otherwise, return false.

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function halvesAreAlike($s) {
        $firstHalf = substr($s, 0, strlen($s)/2);
        $secondHalf = substr($s, strlen($s)/2);
        $vowels = array('a','e','i','o','u');
        $totalvowels1 = 0;
        $totalvowels2 = 0; 
        
        for($i=0; $i< strlen($firstHalf); $i++) {
            if(in_array(strtolower($firstHalf[$i]), $vowels)) {
                $totalvowels1++;
            }
        }

        for($x=0; $x< strlen($secondHalf); $x++) {
            if(in_array(strtolower($secondHalf[$x]), $vowels)) {
                $totalvowels2++;
            }
        }

        return $totalvowels1 == $totalvowels2 ? true : false;
    }
}

$sol = new Solution;
$sol->halvesAreAlike('textbook');
?>