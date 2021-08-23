/*
Title: Classes More than 5 Students 
Difficulty: Easy 
Link: https://leetcode.com/problems/classes-more-than-5-students/

*/
# Write your MySQL query statement below

SELECT class as class
FROM courses 
GROUP BY class
HAVING COUNT(DISTINCT student) >=5