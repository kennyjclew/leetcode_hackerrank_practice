/*
Title: Employees Earning More Than Their Managers
Difficulty: Easy 
Link: https://leetcode.com/problems/employees-earning-more-than-their-managers/


*/

# Write your MySQL query statement below

SELECT E1.Name as Employee 
FROM Employee as E1
INNER JOIN Employee as E2
ON E1.ManagerId = E2.Id 
WHERE E1.Salary > E2.Salary 