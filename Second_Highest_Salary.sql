# https://leetcode.com/problems/second-highest-salary/
SELECT IFNULL((
SELECT Salary
FROM Employee
WHERE Salary < (SELECT Salary FROM Employee ORDER BY Salary DESC LIMIT 1) 
ORDER BY Salary DESC
LIMIT 1
), NULL ) as SecondHighestSalary;
