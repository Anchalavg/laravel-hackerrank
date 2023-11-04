<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Problem;

class ProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //INSERTING A SINGLE DATA=======================================
        // Problem::create([
        //     'title'=>'Reverse String',
        //     'description'=>'Write a function that reverses a string. The input string is given to you. You must print the reverse of it. Example: INPUT: Hello OUTPUT: olleH.',
        //     'constraints'=>'1 <= s.length <= 105 s[i] is a printable ascii character.',
        //     'example'=>'SAMPLE INPUT 1: faceprep SAMPLE OUTPUT 1: perpecaf SAMPLE INPUT 2: welcome SAMPLE OUTPUT 2: emoclew',
        //     'difficulty'=>'easy',
        //     'category_id'=>'String'
           

        // ]);
        //INSERTING MULTIPLE DATA IN A SINGLE TIME INTO DATABASE==========================
        $problems = collect(
            [
                [
                    'title'=>'Reverse String',
                    'description'=>'Write a function that reverses a string. The input string is given to you. You must print the reverse of it. Example: INPUT: Hello OUTPUT: olleH.',
                    'constraints'=>'1 <= s.length <= 105 s[i] is a printable ascii character.',
                    'example'=>'SAMPLE INPUT 1: faceprep SAMPLE OUTPUT 1: perpecaf SAMPLE INPUT 2: welcome SAMPLE OUTPUT 2: emoclew',
                    'difficulty'=>'easy',
                    'category_id'=>'String'

                ],
                [
                    'title'=>'Roman to integer',
                    'description'=>'Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M.For example, 2 is written as II in Roman numeral, just two ones added together. 12 is written as XII, which is simply X + II. Roman numerals are usually written largest to smallest from left to right. However, the numeral for four is not IIII. Instead, the number four is written as IV. Because the one is before the five we subtract it making four. The same principle applies to the number nine, which is written as IX. There are six instances where subtraction is used: I can be placed before V (5) and X (10) to make 4 and 9. X can be placed before L (50) and C (100) to make 40 and 90. C can be placed before D (500) and M (1000) to make 400 and 900. Given a roman numeral, convert it to an integer.', 
                    'constraints'=>'1 <= s.length <= 15 s contains only the characters ("I", "V", "X", "L", "C", "D", "M"). It is guaranteed that s is a valid roman numeral in the range [1, 3999].',
                    'example'=>'Example 1: Input: s = "III" Output: 3 Explanation: III = 3. Example 2: Input: s = "LVIII" Output: 58 Explanation: L = 50, V= 5, III = 3.',
                    'difficulty'=>'easy',
                    'category_id'=>'String'

                ],
                [
                    'title'=>'Longest Substring Without Repeating Characters',
                    'description'=>'Given a string s, find the length of the longest substring without repeating characters.',
                    'constraints'=>'0 <= s.length <= 5 * 104 s consists of English letters, digits, symbols and spaces.',
                    'example'=>'Example 1:  Input: s = "abcabcbb" Output: 3 Explanation: The answer is "abc", with the length of 3.',
                    'difficulty'=>'medium',
                    'category_id'=>'String'

                ],
                [
                    'title'=>'Zigzag Conversion',
                    'description'=>'The string "PAYPALISHIRING" is written in a zigzag pattern on a given number of rows like this: (you may want to display this pattern in a fixed font for better legibility) And then read line by line: "PAHNAPLSIIGYIR" Write the code that will take a string and make this conversion given a number of rows: string convert(string s, int numRows);',
                    'constraints'=>'1 <= s.length <= 1000 s consists of English letters (lower-case and upper-case), "," and ".". 1 <= numRows <= 1000',
                    'example'=>'Example 1: Input: s = "PAYPALISHIRING", numRows = 3 Output: "PAHNAPLSIIGYIR" Example 2: Input: s = "PAYPALISHIRING", numRows = 4 Output: "PINALSIGYAHRPI" Explanation: P     I    N
                    A   L S  I G
                    Y A   H R
                    P     I',
                    'difficulty'=>'medium',
                    'category_id'=>'String'

                ],
                [
                    'title'=>'Regular Expression Matching',
                    'description'=>'Given an input string s and a pattern p, implement regular expression matching with support for "." and "*" where: "." Matches any single character.​​​​ The matching should cover the entire input string (not partial).',
                    'constraints'=>'1 <= s.length <= 20 1 <= p.length <= 20 s contains only lowercase English letters. p contains only lowercase English letters, ".", and "*" It is guaranteed for each appearance of the character "*", there will be a previous valid character to match. ',
                    'example'=>'Example 1: Input: s = "aa", p = "a" Output: false Explanation: "a" does not match the entire string "aa". Example 2: Input: s = "aa", p = "a*" Output: true Explanation: "*" means zero or more of the preceding element, "a". Therefore, by repeating "a" once, it becomes "aa".',
                    'difficulty'=>'hard',
                    'category_id'=>'String'

                ],
                [
                    'title'=>'Substring with Concatenation of All Words',
                    'description'=>'You are given a string s and an array of strings words. All the strings of words are of the same length A concatenated substring in s is a substring that contains all the strings of any permutation of words concatenated. For example, if words = ["ab","cd","ef"], then "abcdef", "abefcd", "cdabef", "cdefab", "efabcd", and "efcdab" are all concatenated strings. "acdbef" is not a concatenated substring because it is not the concatenation of any permutation of words. Return the starting indices of all the concatenated substrings in s. You can return the answer in any order.',
                    'constraints'=>'1 <= s.length <= 104 1 <= words.length <= 5000 1 <= words[i].length <= 30 s and words[i] consist of lowercase English letters.',
                    'example'=>'Example 1: Input: s = "barfoothefoobarman", words = ["foo","bar"] Output: [0,9] Explanation: Since words.length == 2 and words[i].length == 3, the concatenated substring has to be of length 6. The substring starting at 0 is "barfoo". It is the concatenation of ["bar","foo"] which is a permutation of words. The substring starting at 9 is "foobar". It is the concatenation of ["foo","bar"] which is a permutation of words. The output order does not matter. Returning [9,0] is fine too.',
                    'difficulty'=>'hard',
                    'category_id'=>'String'
                ],
                [
                    'title'=>'Two Sum',
                    'description'=>'Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target. You may assume that each input would have exactly one solution, and you may not use the same element twice. You can return the answer in any order.',
                    'constraints'=>'2 <= nums.length <= 10^(4) -10^(9) <= nums[i] <= 10^(9) -10^(9) <= target <= 10^(9) Only one valid answer exists.',
                    'example'=>'Example 1: Input: nums = [2,7,11,15], target = 9 Output: [0,1] Explanation: Because nums[0] + nums[1] == 9, we return [0, 1]. Example 2: Input: nums = [3,2,4], target = 6 Output: [1,2]',
                    'difficulty'=>'easy',
                    'category_id'=>'Array'

                ],
                [
                    'title'=>'Remove Duplicates from Sorted Array',
                    'description'=>'Given an integer array nums sorted in non-decreasing order, remove the duplicates in-place such that each unique element appears only once. The relative order of the elements should be kept the same. Then return the number of unique elements in nums. Consider the number of unique elements of nums to be k, to get accepted, you need to do the following things: Change the array nums such that the first k elements of nums contain the unique elements in the order they were present in nums initially. The remaining elements of nums are not important as well as the size of nums. Return k. Custom Judge: The judge will test your solution with the following code: int[] nums = [...]; int[] expectedNums = [...]; int k = removeDuplicates(nums); If all assertions pass, then your solution will be accepted. ',
                    'constraints'=>'1 <= nums.length <= 3 * 10^(4), -100 <= nums[i] <= 100 nums is sorted in non-decreasing order.',
                    'example'=>'Example 1 Input: nums = [1,1,2] Output: 2, nums = [1,2,_] Explanation: Your function should return k = 2, with the first two elements of nums being 1 and 2 respectively. It does not matter what you leave beyond the returned k (hence they are underscores). Example 2: Input: nums = [0,0,1,1,1,2,2,3,3,4] Output: 5, nums = [0,1,2,3,4,_,_,_,_,_] Explanation: Your function should return k = 5, with the first five elements of nums being 0, 1, 2, 3, and 4 respectively. It does not matter what you leave beyond the returned k (hence they are underscores).',
                    'difficulty'=>'easy',
                    'category_id'=>'Array'

                ],
                [
                    'title'=>'Container With Most Water',
                    'description'=>'You are given an integer array height of length n. There are n vertical lines drawn such that the two endpoints of the ith line are (i, 0) and (i, height[i]). Find two lines that together with the x-axis form a container, such that the container contains the most water. Return the maximum amount of water a container can store. Notice that you may not slant the container.',
                    'constraints'=>'n == height.length 2 <= n <= 105 0 <= height[i] <= 104',
                    'example'=>'Example 1: Input: height = [1,8,6,2,5,4,8,3,7] Output: 49 Explanation: The above vertical lines are represented by array [1,8,6,2,5,4,8,3,7]. In this case, the max area of water (blue section) the container can contain is 49. ',
                    'difficulty'=>'medium',
                    'category_id'=>'Array'

                ],
                [   
                    'title'=>'3Sum',
                    'description'=>'Given an integer array nums, return all the triplets [nums[i], nums[j], nums[k]] such that i != j, i != k, and j != k, and nums[i] + nums[j] + nums[k] == 0. Notice that the solution set must not contain duplicate triplets.',
                    'constraints'=>'3 <= nums.length <= 3000 -105 <= nums[i] <= 105',
                    'example'=>'Example 2: Input: nums = [0,1,1] Output: [] Explanation: The only possible triplet does not sum up to 0.',
                    'difficulty'=>'medium',
                    'category_id'=>'Array'

                ],
                [
                    'title'=>'Median of Two Sorted Arrays',
                    'description'=>'Given two sorted arrays nums1 and nums2 of size m and n respectively, return the median of the two sorted arrays. The overall run time complexity should be O(log (m+n)).',
                    'constraints'=>'nums1.length == m nums2.length == n 0 <= m <= 1000 0 <= n <= 1000 1 <= m + n <= 2000 -106 <= nums1[i], nums2[i] <= 106',
                    'example'=>'Example 1: Input: nums1 = [1,3], nums2 = [2] Output: 2.00000 Explanation: merged array = [1,2,3] and median is 2.',
                    'difficulty'=>'hard',
                    'category_id'=>'Array'

                ],
                [
                    'title'=>'First Missing Positive',
                    'description'=>'Given an unsorted integer array nums, return the smallest missing positive integer. You must implement an algorithm that runs in O(n) time and uses O(1) auxiliary space.',
                    'constraints'=>'1 <= nums.length <= 105 -231 <= nums[i] <= 231 - 1',
                    'example'=>'Example 1: Input: nums = [1,2,0] Output: 3 Explanation: The numbers in the range [1,2] are all in the array. Example 2: Input: nums = [3,4,-1,1] Output: 2 Explanation: 1 is in the array but 2 is missing.',
                    'difficulty'=>'hard',
                    'category_id'=>'Array'

                ],

            ]
        );

        $problems->each(function($prblm){
            Problem::insert($prblm);
        });
           
    }
}
