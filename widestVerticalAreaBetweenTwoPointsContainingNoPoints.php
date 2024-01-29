<?php 
// https://leetcode.com/problems/widest-vertical-area-between-two-points-containing-no-points/description

// Given n points on a 2D plane where points[i] = [xi, yi], Return the widest vertical area between two points such that no points are inside the area.
// A vertical area is an area of fixed-width extending infinitely along the y-axis (i.e., infinite height). 
// The widest vertical area is the one with the maximum width.
// Note that points on the edge of a vertical area are not considered included in the area.

class Solution {

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function maxWidthOfVerticalArea($points) {
        $sorted = [];
        for($i = 0; $i < count($points) ; $i++){
            $sorted[] = $points[$i][0];
        }
        rsort($sorted);
        
        $maxWidth = 0;
        for($i = 0; $i < count($sorted)-1; $i++){
            $width = $sorted[$i] - $sorted[$i+1];
            $maxWidth = max($maxWidth,$width);
        }
        return $maxWidth;
    }
}

$solution = new Solution;
$solution->maxWidthOfVerticalArea([[8,7],[9,9],[7,4],[9,7]]);
?>