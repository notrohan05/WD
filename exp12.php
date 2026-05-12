Exp 12 - Create a PHP script to store and display values in an array.

<?php

$subjects = ["DBMS", "PHP", "Java","Python", "OS" ];

echo "<h2>Subjects stored are:<br></h2>";

foreach($subjects as $sub)
{
    echo $sub . "<br>";
}

?>


Aim-
To create a PHP program to store and display elements of an array using the foreach loop.

Objective-
To understand the concept of arrays in PHP.
To learn how to store multiple values in a single variable.
To use the foreach loop for traversing arrays.
To display array elements on a web page.

Software Requirement-
XAMPP / WAMP Server (for running PHP)
Text Editor (Notepad / Visual Studio Code / Sublime Text)
Web Browser (Google Chrome / Mozilla Firefox / Microsoft Edge)

Algorithm:
1. Install and start a web server (XAMPP/WAMP/LAMP).
2. Open a text editor (VS Code, Sublime Text, etc.).
3. Create a new PHP file and save it as array_example.php.
4. Write PHP code to create an array, store values, and display them.
5. Save the file in the server’s htdocs folder.
6. Open the file in a web browser using http://localhost/array_example.php.
7. Verify the output to ensure values are correctly displayed from the array.

Theory-
An array in PHP is a special variable that can store multiple values in a single variable name.

In this program:
$subjects is an indexed array storing multiple subject names.
foreach loop is used to iterate through each element of the array.
Each element is accessed one by one and displayed using echo.

Arrays are useful when we need to store and manage a collection of similar data efficiently.

Conclusion-
Thus, we successfully created a PHP program to store and display array elements using the foreach loop. This program helped in understanding the concept of arrays and iteration in PHP.

VIVA QUESTIONS:

1. What is the purpose of this program?
This program stores multiple subjects in an array and displays them using a loop.

2. What is PHP?
PHP stands for Hypertext Preprocessor. It is a server-side scripting language.

3. What is an array?
An array is a variable that stores multiple values in a single variable.

4. Which type of array is used in this program?
An indexed array is used.
Example:
$subjects = ["DBMS", "PHP", "Java", "Python", "OS"];

5. What are indexed arrays?
Indexed arrays store values with numeric indexes starting from 0.

6. What is stored in $subjects?
The $subjects array stores subject names:
DBMS
PHP
Java
Python
OS

7. What is the use of foreach loop?
The foreach loop is used to access array elements one by one.
Example:
foreach($subjects as $sub)

8. What does $sub represent?
$sub stores one array element at a time during each loop iteration.

9. How many times will the loop execute?
The loop executes 5 times because there are 5 subjects.

10. What is the output of this program?
The program displays all subjects line by line.

11. Why is <br> used in echo statement?
<br> creates a new line in HTML output.

12. What is the use of echo in PHP?
echo displays output on the webpage.

13. Can arrays store different data types?
Yes, arrays can store strings, numbers, and other data types together.

14. What is the index number of "Java"?
The index of "Java" is 2.

15. What is the first element of the array?
DBMS

16. What is the last element of the array?
OS

17. What is the difference between for loop and foreach loop?
for loop uses indexes.
foreach directly accesses array elements.

18. Which extension is used for PHP files?
.php
Example:
array.php

19. Which software is used to run PHP programs?
Examples:
XAMPP
WAMP

20. What is server-side scripting?
Server-side scripting means code executes on the server before showing output in browser.
