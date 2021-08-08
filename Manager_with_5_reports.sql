# Write your MySQL query statement below
# https://leetcode.com/problems/managers-with-at-least-5-direct-reports/
SELECT Name as Name 
FROM Employee
LEFT JOIN 
(
SELECT COUNT(ManagerId) as numofreports, ManagerId
FROM Employee 
GROUP BY ManagerId
) a 
ON Employee.Id = a.ManagerId
WHERE numofreports >= 5