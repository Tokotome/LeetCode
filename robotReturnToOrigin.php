<?php 
// https://leetcode.com/problems/robot-return-to-origin
// There is a robot starting at the position (0, 0), the origin, on a 2D plane. Given a sequence of its moves, judge if this robot ends up at (0, 0) 
// after it completes its moves.
// You are given a string moves that represents the move sequence of the robot where moves[i] represents its ith move. 
// Valid moves are 'R' (right), 'L' (left), 'U' (up), and 'D' (down).
// Return true if the robot returns to the origin after it finishes all of its moves, or false otherwise.
// Note: The way that the robot is "facing" is irrelevant. 'R' will always make the robot move to the right once, 
// 'L' will always make it move left, etc. Also, assume that the magnitude of the robot's movement is the same for each move.

class Solution {

    /**
     * @param String $moves
     * @return Boolean
     */
    function judgeCircle($moves) {
       // horizontal
       $x = 0;

       //vertical
       $y = 0;
       for($i = 0; $i < strlen($moves); $i++) {
           if($moves[$i] == 'U') {
               $y++;
           }   
           
           if($moves[$i] == 'D') {
               $y--;
           }   

           if($moves[$i] == 'L') {
               $x++;
           }   

           if($moves[$i] == 'R') {
               $x--;
           }   
       }
       return $x == 0 && $y == 0 ? true : false;
    }
}



$sol = new Solution;
$sol->judgeCircle('RLUURDDDLU');

?>