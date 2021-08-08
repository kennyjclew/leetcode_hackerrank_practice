<?php
//https://www.hackerrank.com/challenges/compare-the-triplets/problem 
//Compare the triplets

/* 
Alice and Bob each created one problem for HackerRank. A reviewer rates the two challenges, awarding points on a scale from 1 to 100 for three categories: problem clarity, originality, and difficulty.
The rating for Alice's challenge is the triplet a = (a[0], a[1], a[2]), and the rating for Bob's challenge is the triplet b = (b[0], b[1], b[2]).
The task is to find their comparison points by comparing a[0] with b[0], a[1] with b[1], and a[2] with b[2].

a[0] > b[0] alice 1 point
a[1] < b[1] bob 1 point
a[2] > b[2] alice 1 point

a = (95, 80, 70)
b = (86, 45, 50)

a = 1 + 1 + 1 = 3
b = 0

output = [3, 0]

a = [1, 2, 3] 
b = [3, 2, 1] 

[1, 1]
For elements *0*, Bob is awarded a point because a[0] .
For the equal elements a[1] and b[1], no points are earned.
Finally, for elements 2, a[2] > b[2] so Alice receives a point.

NO points when its equal

a_points = 0
b_points = 0
iterate over a 
compare it with corresponding b 
if a < b
a_points ++
else if b > a
b_points ++

a = (95, 80, 70)
b = (86, 45, 50)
*/
function check_score($a, $b){

	$a_points = ($a[0] > $b[0] ?1:0) + ($a[1] > $b[1] ?1:0) + ($a[2] > $b[2] ?1:0) ;
	$b_points = ($a[0] < $b[0] ?1:0) + ($a[1] < $b[1] ?1:0) + ($a[2] < $b[2] ?1:0) ;

	return [$a_points, $b_points];
}


$output = check_score([9,8,7], [3,2,1]);

print_r($output);
















?>