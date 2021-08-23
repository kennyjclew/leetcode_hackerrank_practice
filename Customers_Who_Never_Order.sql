# https://leetcode.com/problems/customers-who-never-order/
select c.name as 'Customers'
FROM Customers AS c
WHERE c.ID 
NOT IN (SELECT o.customerId FROM Orders AS o);
