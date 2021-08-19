<?php

/**
 Link: https://leetcode.com/problems/add-two-numbers/
 Difficulty: Medium
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */

 class ListNode {
	  public $val = 0;
	  public $next = null;
	  function __construct($val = 0, $next = null) {
	      $this->val = $val;
	      $this->next = $next;
	 }
 }
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        
        $l3 = new ListNode();
        $temp = $l3;
        while($l1 != null || $l2 != null){
            
            $insert = 0;
            $a = $l1->val;
            print($a);
            print(" ");
            $b = $l2->val;
            print($b);
            print("\n");
            $insert = $a + $b + $temp->val;
            // var_dump($insert);
            if($insert > 9){
                print("IF\n");
                $insert = $insert - 10;
                $temp->next = new ListNode(1,null);
            }else if($l1->next != null || $l2->next != null){
            	print("else\n");
                $temp->next = new ListNode();
            }
            // $old = $temp->val;
            $temp->val = $insert;
            $l1 = $l1->next;
            $l2 = $l2->next;
            $temp = $temp->next;
        }
        // var_dump($l3);
        return $l3;
    }
}

// function insert
$l1 = new ListNode(6, null);
$temp = $l1;
$temp->next = new ListNode(4, null);
$temp = $temp->next;
$temp->next = new ListNode(5, null);
$temp = $temp->next;
$temp->next = new ListNode(0, null);
$temp = $temp->next;
$temp->next = new ListNode(4, null);
$temp = $temp->next;
$temp->next = new ListNode(4, null);
$temp = $temp->next;
$temp->next = new ListNode(9, null);
$temp = $temp->next;
$temp->next = new ListNode(4, null);
$temp = $temp->next;
$temp->next = new ListNode(1, null);
$temp = $temp->next;

$l2 = new ListNode(3, null);
$temp = $l2;
$temp->next = new ListNode(8, null);
$temp = $temp->next;
$temp->next = new ListNode(8, null);
$temp = $temp->next;
$temp->next = new ListNode(0, null);
$temp = $temp->next;
$temp->next = new ListNode(3, null);
$temp = $temp->next;
$temp->next = new ListNode(0, null);
$temp = $temp->next;
$temp->next = new ListNode(1, null);
$temp = $temp->next;
$temp->next = new ListNode(4, null);
$temp = $temp->next;
$temp->next = new ListNode(8, null);
$temp = $temp->next;


$result = new Solution();
$linkedlist = $result->addTwoNumbers($l1,$l2);
$temp = $linkedlist;
print("RESULT: ");
while($temp != null){
	print($temp->val.=" ");
	$temp = $temp->next;
}



?>