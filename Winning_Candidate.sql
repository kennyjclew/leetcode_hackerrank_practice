# Write your MySQL query statement below
# https://leetcode.com/problems/winning-candidate/
SELECT Candidate.Name as Name
FROM Candidate
JOIN 
(SELECT CandidateId, COUNT(CandidateId) AS Num
FROM Vote 
GROUP BY CandidateId
ORDER BY Num DESC
LIMIT 1) temp
ON Candidate.id = temp.CandidateId;
