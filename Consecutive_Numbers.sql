
/* 
Link: https://leetcode.com/problems/consecutive-numbers/
Difficulty: Medium
*/
SELECT Distinct l1.Num as ConsecutiveNums
FROM Logs l1, Logs l2, Logs l3
WHERE l1.Id = l1.Id  
AND l2.Id = (l1.Id + 1)
AND l3.Id = (l1.Id + 2 )
AND l1.Num = l2.Num
AND l2.Num = l3.Num


