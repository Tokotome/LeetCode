<?php 
// https://leetcode.com/problems/minimum-index-sum-of-two-lists/description/

// Given two arrays of strings list1 and list2, find the common strings with the least index sum.
// A common string is a string that appeared in both list1 and list2.
// A common string with the least index sum is a common string such that if it appeared at list1[i] and list2[j] then i + j should be the minimum value among all the other common strings.
// Return all the common strings with the least index sum. Return the answer in any order.

// Constraints:

// 1 <= list1.length, list2.length <= 1000
// 1 <= list1[i].length, list2[i].length <= 30
// list1[i] and list2[i] consist of spaces ' ' and English letters.
// All the strings of list1 are unique.
// All the strings of list2 are unique.
// There is at least a common string between list1 and list2.

class Solution {

    /**
     * @param String[] $list1
     * @param String[] $list2
     * @return String[]
     */
    function findRestaurant($list1, $list2) {
        $indexesSum = 0;
        $common = [];
        
        foreach($list1 as $k => $word) {
            foreach($list2 as $k2 => $word2) {
                if($word == $word2) {
                    $indexesSum = $k+$k2;
                    $common[$word] = $indexesSum;
                }
            }    
        }
        
        $output = [];
        //the sum of the last indexes of both arrays according to the constraints
        $smallestValue = 1998;
        
        foreach ($common as $key => $value) {
            if ($value < $smallestValue) {    
                $smallestValue = $value;
                $output = [$key];
            } elseif ($value == $smallestValue) {
                $output[] = $key;
            }
        }
        return $output;
    }
}

$solution = new Solution;
$solution->findRestaurant(["happy","sad","good"], ["sad","happy","good"]);

?>