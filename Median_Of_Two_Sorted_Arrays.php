<?php

/* 
Title: Median of Two Sorted Arrays
Link: https://leetcode.com/problems/median-of-two-sorted-arrays/
Difficulty: Hard

*/

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $merged = array_merge($nums1, $nums2);
        sort($merged);
        // var_dump($merged);
        $length = count($merged);
        if($length % 2 == 0){
            $index = $length / 2; 
            $median = ($merged[$index - 1] + $merged[$index] ) /2;
            return $median;
        } else{
            $index = ($length / 2) + 1;
            return $merged[$index - 1];
        }
    }
}

$solution = new Solution();
$result = $solution->findMedianSortedArrays([1,2,7], [3,5,8]);

print($result);


?>