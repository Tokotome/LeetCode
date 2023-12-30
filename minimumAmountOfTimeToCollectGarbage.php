<?php 
// https://leetcode.com/problems/minimum-amount-of-time-to-collect-garbage

// You are given a 0-indexed array of strings garbage where garbage[i] represents the assortment of garbage at the ith house. 
// garbage[i] consists only of the characters 'M', 'P' and 'G' representing one unit of metal, paper and glass garbage respectively. 
// Picking up one unit of any type of garbage takes 1 minute.
// You are also given a 0-indexed integer array travel where travel[i] is the number of minutes needed to go from house i to house i + 1.
// There are three garbage trucks in the city, each responsible for picking up one type of garbage. 
// Each garbage truck starts at house 0 and must visit each house in order; however, they do not need to visit every house.
// Only one garbage truck may be used at any given moment. While one truck is driving or picking up garbage, the other two trucks cannot do anything.
// Return the minimum number of minutes needed to pick up all the garbage.

class Solution {

    /**
     * @param String[] $garbage
     * @param Integer[] $travel
     * @return Integer
     */
    function garbageCollection($garbage, $travel) {
        $materials = ['P', 'G', 'M'];
        array_unshift($travel, 0);
        $time = 0;
        foreach ($materials as $material) {
        	$extraTime = 0;
        	foreach ($garbage as $key => $g) {
	        	$count = substr_count($g, $material);
	        	if ($count > 0) {
	        		$time += $travel[$key] + $count;
	        		if ($extraTime != 0) {
	        			$time += $extraTime;
	        			$extraTime = 0;
	        		}
	        	} else {
	        		$extraTime += $travel[$key];
	        	}
        	}	
        }
        return $time;

    }
}

$sol = new Solution;
$sol->garbageCollection(['G','P','M'], [1,3]);
//$sol->garbageCollection(['MMM','PGM','GP'], [3,10]);
?>