//https://leetcode.com/problems/two-sum/

class Solution {
    public int[] twoSum(int[] nums, int target) {
        int i;
        int k;
        int[] intArray = new int[2];
        for(i = 0; i < nums.length; i ++){
            for(k = 0; k < nums.length; k++){
                if(nums[i] + nums[k] == target && i != k){
                    intArray[0] = i;
                    intArray[1] = k;
                }
            }
        }
        
        return intArray;
    }
}