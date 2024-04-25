<?php 
// https://leetcode.com/problems/determine-the-winner-of-a-bowling-game/description/

// You are given two 0-indexed integer arrays player1 and player2, that represent the number of pins that player 1 and player 2 hit in a bowling game, respectively.
// The bowling game consists of n turns, and the number of pins in each turn is exactly 10.
// Assume a player hit xi pins in the ith turn. The value of the ith turn for the player is:
// 2xi if the player hit 10 pins in any of the previous two turns.
// Otherwise, It is xi.
// The score of the player is the sum of the values of their n turns.
// Return
// 1 if the score of player 1 is more than the score of player 2,
// 2 if the score of player 2 is more than the score of player 1, and
// 0 in case of a draw.


class Solution {

    /**
     * @param Integer[] $player1
     * @param Integer[] $player2
     * @return Integer
     */
    function isWinner($player1, $player2) {
        $result1 = $this->calculateResult($player1);
        $result2 = $this->calculateResult($player2);
        
        return ($result1 > $result2) ? 1 : (($result2 > $result1) ? 2 : 0);
    }

    private function calculateResult($points) {
        $result = 0;
        for($i=0; $i< count($points); $i++) {
            if($points[$i-1] == 10 || $points[$i-2] == 10) {
                $result += $points[$i]*2;
            } else {
                $result += $points[$i];
            }
            $i++;
        }

        return $result;
    }
}

$solution = new Solution;
$solution->isWinner([2,3], [4,1]);
?>

