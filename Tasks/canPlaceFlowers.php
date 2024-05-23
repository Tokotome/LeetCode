<?php 
// https://leetcode.com/problems/can-place-flowers/description/

// You have a long flowerbed in which some of the plots are planted, and some are not. However, flowers cannot be planted in adjacent plots.
// Given an integer array flowerbed containing 0's and 1's, where 0 means empty and 1 means not empty, and an integer n, 
// return true if n new flowers can be planted in the flowerbed without violating the no-adjacent-flowers rule and false otherwise.

class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {
        $planted = 0;
        $length = count($flowerbed);
        
        for ($i = 0; $i < $length; $i++) {
            if ($flowerbed[$i] == 0 && ($i == 0 || $flowerbed[$i - 1] == 0) && ($i == $length - 1 || $flowerbed[$i + 1] == 0)) {
                $flowerbed[$i] = 1;
                $planted++;
            }
        }
        
        return $planted >= $n;
    }
}

$solution = new Solution;
$solution->canPlaceFlowers([1,0,0,0,1], 2);
?>

