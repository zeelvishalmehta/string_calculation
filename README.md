# string_calculation
Project Name: String Calculation<br>
Language: PHP 7.3

1) Create a class StringCalculator.
2) Inside a class create a function Add() which accepts a string parameter and returns an integer value.
3) The function add(), calculate the numbers from a string and return their sum.
4) If string is empty then return 0.
5) The negative numbers are not counted and it throws an exception.
6) If the number is larger than 1000, it will not count.

Test Cases:
1) Input: “1,2,5” -  Result: 8.
2) Input: “1\n,2,3” - Result: 6
3) Input: “1,\n2,4” - Result: 7
4) Input: “//;\n1;3;4” - Result: 8
5) Input: “//$\n1$2$3” - Result: 6
6) Input: “//@\n2@3@8” - Result: 13
7) Input: “2,1001” - Result: 2
8) Input: “//***\n1***2***3” - Result 6
9) Input: “//$,@\n1$2@3” - Result 6

