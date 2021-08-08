class Solution:
    def longestCommonPrefix(self, strs: List[str]) -> str:
        no_of_str = len(strs)
        for i in strs:
            prefix = ""
            for k in i:
                prefix += k
                for j in strs:
                    length = len(prefix)
                    if(prefix == j[0:length]):
                        continue
                    else:
                        prefix = prefix[:-1]
                        break
                
        return prefix
                        