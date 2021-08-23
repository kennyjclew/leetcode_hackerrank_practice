<?php

/* 
Title: Longest Substring Without Repeating Characters
Link: https://leetcode.com/problems/longest-substring-without-repeating-characters/
Difficulty: Medium

*/

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $array_str = str_split($s);
        $maxlength = 0;
        if(empty($s)){
            return 0;
        }
        for($k = 0; $k < count($array_str); $k++){
            $length = 0;
            $duplicate_array = [];
            for($i = $k; $i < count($array_str); $i++){
                if(isset($duplicate_array[$array_str[$i]])){
                    break;
                }
                else{
                    $length ++;
                    $duplicate_array[$array_str[$i]] = 1;
                }
            }
            if($length > $maxlength){
                $maxlength = $length;
            }
        }
        
        return $maxlength;
    }
}

$solution = new Solution();
$length = $solution->lengthOfLongestSubstring("aabcdefff");
print($length .= " \n");

?>