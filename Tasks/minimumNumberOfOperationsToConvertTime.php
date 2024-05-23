<?php 

// https://leetcode.com/problems/minimum-number-of-operations-to-convert-time/description

// You are given two strings current and correct representing two 24-hour times.
// 24-hour times are formatted as "HH:MM", where HH is between 00 and 23, and MM is between 00 and 59. 
// The earliest 24-hour time is 00:00, and the latest is 23:59.
// In one operation you can increase the time current by 1, 5, 15, or 60 minutes. 
// You can perform this operation any number of times.
// Return the minimum number of operations needed to convert current to correct.

class Solution {

    /**
     * @param String $current
     * @param String $correct
     * @return Integer
     */
    function convertTime($current, $correct) {
        $currentArr = explode(':', $current);
        $currentMinutes = $currentArr[0]*60+$currentArr[1];
        
        $correctArr = explode(':', $correct);
        $correctMinutes = $correctArr[0]*60+$correctArr[1];
        
        $difference = $correctMinutes - $currentMinutes;
        
        $steps = [60, 15, 5, 1];
        $totalSteps = 0;

        foreach ($steps as $step) {
            while($difference >= $step) {
                $difference -= $step;
                $totalSteps++;
            }    
        }

        return $totalSteps;
    }
}

$sol = new Solution;
$sol->convertTime("02:30", "04:35");

?>