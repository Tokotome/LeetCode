<?php 
// https://leetcode.com/problems/destination-city

// You are given the array paths, where paths[i] = [cityAi, cityBi] means there exists a direct path going from cityAi to cityBi. 
// Return the destination city, that is, the city without any path outgoing to another city.
// It is guaranteed that the graph of paths forms a line without any loop, therefore, there will be exactly one destination city.

class Solution {

    /**
     * @param String[][] $paths
     * @return String
     */
    function destCity($paths) {
        $cities = array_reduce($paths, 'array_merge', array());
        $cities = array_count_values($cities);
        $startEnd = [];
        foreach($cities as $city => $count) {
            if($count == 1) {
                $startEnd[] = $city;
            }
        }
        
        foreach($paths as $path) {
            if(in_array(end($path),$startEnd) == true) {
                return end($path);
            }
        }
    }
}

$sol = new Solution;
$sol->destCity([['B','C'],['D','B'],['C','A']]);
?>