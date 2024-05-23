<?php 
// https://leetcode.com/problems/determine-if-two-events-have-conflict/description/

// You are given two arrays of strings that represent two inclusive events that happened on the same day, event1 and event2, where:
// event1 = [startTime1, endTime1] and
// event2 = [startTime2, endTime2].
// Event times are valid 24 hours format in the form of HH:MM.
// A conflict happens when two events have some non-empty intersection (i.e., some moment is common to both events).
// Return true if there is a conflict between two events. Otherwise, return false.

class Solution {

    /**
     * @param String[] $event1
     * @param String[] $event2
     * @return Boolean
     */
    function haveConflict($event1, $event2) {
        $start1 = $this->returnHoursAndMinutes($event1[0]);
        $secondsStart1 = 3600 * $start1['hours'] + 60 * $start1['minutes'];

        $end1 = $this->returnHoursAndMinutes($event1[1]);
        $secondsEnd1 = 3600 * $end1['hours'] + 60 * $end1['minutes'];

        $start2 = $this->returnHoursAndMinutes($event2[0]);
        $secondsStart2 = 3600 * $start2['hours'] + 60 * $start2['minutes'];

        $end2 = $this->returnHoursAndMinutes($event2[1]);
        $secondsEnd2 = 3600 * $end2['hours'] + 60 * $end2['minutes'];

        if (($secondsStart1 <= $secondsStart2 && $secondsStart2 <= $secondsEnd1) || ($secondsStart2 <= $secondsStart1 && $secondsStart1 <= $secondsEnd2)) {
            return true;
        } else {
            return false;
        }
    }

    private function returnHoursAndMinutes($time) {
        for ($i = 0; $i < strlen($time); $i++) {
            if ($time[$i] === ':') {
                $colonFound = true;
                continue;
            }
            
            if (!$colonFound) {
                $hours .= $time[$i];
            } else {
                $minutes .= $time[$i];
            }
        }

        return [
            'hours' => $hours,
            'minutes' => $minutes,
        ];
    }
}

$solution = new Solution;
$solution->haveConflict(["10:00","11:00"], ["14:00","15:00"]);
?>

