Exp 11 - Create a PHP script to perform string manipulation.

<?php

$str = "Computer Engineering";

echo "<h2>String Manipulation Program</h2>";

echo "Original String: " . $str . "<br><br>";

// Length of string
echo "Length of String: " . strlen($str) . "<br><br>";

// Reverse string
echo "Reversed String: " . strrev($str) . "<br><br>";

// Substring
echo "Substring (0,8): " . substr($str, 0, 8);

?>

Aim-
To perform string manipulation operations in PHP such as finding length, reversing a string, and extracting a substring.

Objective-
To understand basic string functions in PHP.
To learn how to manipulate and process strings.
To use built-in PHP functions like strlen(), strrev(), and substr().
To display processed string output on a web page.

Software Requirement-
XAMPP / WAMP Server (for running PHP)
Text Editor (Notepad / Visual Studio Code / Sublime Text)
Web Browser (Google Chrome / Mozilla Firefox / Microsoft Edge)

Theory-
PHP provides many built-in functions to perform operations on strings.

In this program:
strlen($str) is used to find the length of the string.
strrev($str) is used to reverse the string.
substr($str, 0, 8) is used to extract a part of the string starting from index 0 to 8 characters.

Strings in PHP are sequences of characters, and these functions help in processing and modifying them efficiently.

Conclusion-
Thus, we successfully performed string manipulation operations in PHP. This program helped in understanding how to use built-in string functions for processing text data.
