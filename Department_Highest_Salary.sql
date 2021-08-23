# Write your MySQL query statement below
# https://leetcode.com/problems/department-highest-salary/
SELECT b.departmentName as Department, a.Name as Employee, a.Salary as Salary
FROM Employee as a
INNER JOIN 
(
    SELECT MAX(Salary) as maxSalary, Employee.DepartmentId as departmentId, Department.Name as departmentName
    FROM Employee
    INNER JOIN Department 
    ON Employee.DepartmentId = Department.Id
    Group By Employee.DepartmentId
) b
ON a.DepartmentId = b.departmentId
WHERE a.Salary = maxSalary
