<?php 
// https://leetcode.com/problems/determine-color-of-a-chessboard-square

// You are given coordinates, a string that represents the coordinates of a square of the chessboard. 
// Return true if the square is white, and false if the square is black.
// The coordinate will always represent a valid chessboard square. 
// The coordinate will always have the letter first, and the number second.

class Solution {

    /**
     * @param String $coordinates
     * @return Boolean
     */
    function squareIsWhite($coordinates) {
        $letter = str_split($coordinates)[0];
        $number = str_split($coordinates)[1];
        $validOdds = ['a', 'c', 'e', 'g'];
        $validEvens = ['b', 'd', 'f', 'h'];

        if($number <= 0 && $number > 8 || in_array(strtolower($letter),$validOdds ) == false && in_array(strtolower($letter),$validEvens ) == false) {
            throw new Exception("Invalid chess square!");
        }

        if($number % 2 == 0 && in_array($letter, $validOdds) == true) {
            return true;
        }
        
        if($number % 2 == 1 && in_array($letter, $validEvens) == true) {
            return true;
        }

        return false;     
    }
}

$sol = new Solution;
$sol->squareIsWhite("a1");
?>