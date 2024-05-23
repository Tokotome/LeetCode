<?php 
// https://leetcode.com/problems/height-checker/description/

// A school is trying to take an annual photo of all the students. The students are asked to stand in a single file line in non-decreasing order by height. 
// Let this ordering be represented by the integer array expected where expected[i] is the expected height of the ith student in line.
// You are given an integer array heights representing the current order that the students are standing in. 
// Each heights[i] is the height of the ith student in line (0-indexed).
// Return the number of indices where heights[i] != expected[i].

class Solution {

    /**
     * @param Integer[] $heights
     * @return Integer
     */
    function heightChecker($heights) {
        
        $count = 0;
        $originalHeights = $heights;
        
        foreach($heights as $height) {
            $count++;
        }
        
        //sort the array
        for($i=0; $i<$count;$i++) {
            for($j=0; $j<$count-1;$j++) {
                if($heights[$j] >= $heights[$j+1]) {
                    $temp = $heights[$j];
                    $heights[$j] = $heights[$j+1];
                    $heights[$j+1] = $temp;
                }
            }    
        }
        
        $unmatched = 0;
        foreach($heights as $k => $height) {
            if($heights[$k] != $originalHeights[$k]) {
                $unmatched++;
            }
        }
        return $unmatched;
    }
}

$solution = new Solution;
$solution->heightChecker([5,1,2,3,4]);
?>