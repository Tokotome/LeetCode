<?php 
// https://leetcode.com/problems/occurrences-after-bigram/description

// Given two strings first and second, consider occurrences in some text of the form "first second third", 
// where second comes immediately after first, and third comes immediately after second.
// Return an array of all the words third for each occurrence of "first second third".

class Solution {

    /**
     * @param String $text
     * @param String $first
     * @param String $second
     * @return String[]
     */
    function findOcurrences($text, $first, $second) {
        $arr = explode(' ', $text);
        
        $result = [];
        for($i=0; $i < count($arr)-2; $i++) {
            if($arr[$i] == $first && $arr[$i+1] == $second)  {
                $result[] = $arr[$i+2];
            }
        }

        return $result;
    }
}

$sol = new Solution;
$sol->findOcurrences('ypkk lnlqhmaohv lnlqhmaohv lnlqhmaohv ypkk ypkk ypkk ypkk ypkk ypkk lnlqhmaohv lnlqhmaohv lnlqhmaohv lnlqhmaohv ypkk ypkk ypkk lnlqhmaohv lnlqhmaohv ypkk', 'lnlqhmaohv', 'ypkk');
?>