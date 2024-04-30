<?php 
require_once __DIR__ . '/../../LeetCode/LeetCode/reverseWordsInString.php';

use PHPUnit\Framework\TestCase;

class ReverseWordsInStringTest extends TestCase
{
    public function testSingleWord() {
        $solution = new Solution();
        
        $this->assertEquals("olleh", $solution->reverseWords("hello"));
    }

    public function testMultipleWords() {
        $solution = new Solution();
        $this->assertEquals("olleh dlrow", $solution->reverseWords("hello world"));
    }
}
?>