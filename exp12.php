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
