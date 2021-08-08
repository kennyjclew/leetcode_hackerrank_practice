# Write your MySQL query statement below
# https://leetcode.com/problems/duplicate-emails/
SELECT DISTINCT(Person.Email) as 'Email'
FROM Person
LEFT JOIN (SELECT Email, COUNT(Email) AS num
FROM Person
GROUP BY Email) e
ON e.Email = Person.Email
WHERE e.num > 1;
