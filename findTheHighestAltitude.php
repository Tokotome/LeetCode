<?php 
// https://leetcode.com/problems/find-the-highest-altitude/description

// There is a biker going on a road trip. The road trip consists of n + 1 points at different altitudes. 
// The biker starts his trip on point 0 with altitude equal 0.
// You are given an integer array gain of length n where gain[i] is the net gain in altitude between points i​​​​​​ and i + 1 for all (0 <= i < n). 
// Return the highest altitude of a point.

class Solution {

    /**
     * @param Integer[] $gain
     * @return Integer
     */
    function largestAltitude($gain) {
        array_unshift($gain, 0);
        
        $altitude = 0;
        $top = 0;
        
        for($i=0;$i<count($gain); $i++) {
            $altitude = $altitude + $gain[$i];
            $top = max($altitude, $top);
        }

        return $top;
    }
}

$sol = new Solution;
$sol->largestAltitude([-5,1,5,0,-7]);
?>