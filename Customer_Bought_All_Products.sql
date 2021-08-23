/*
Title: Customers Who Bought All Products
Difficulty: Medium 
Link: https://leetcode.com/problems/customers-who-bought-all-products/
*/


# Write your MySQL query statement below

SELECT customer_id
FROM Customer c
GROUP BY customer_id
HAVING COUNT(DISTINCT product_key) = (SELECT COUNT(DISTINCT product_key) 
                             			FROM Product)

