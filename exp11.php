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

Algorithm:
1. Install and start a web server (XAMPP/WAMP).
2. Open a text editor.
3. Create a new PHP file and save it as string_manipulation.php.
4. Write PHP code using string functions strrev(), strlen(), and substr().
5. Save the file in the server’s htdocs folder.
6. Open the file in a web browser using http://localhost/string_manipulation.php.
7. Verify the output for the given string.

Theory-
PHP provides many built-in functions to perform operations on strings.

In this program:
strlen($str) is used to find the length of the string.
strrev($str) is used to reverse the string.
substr($str, 0, 8) is used to extract a part of the string starting from index 0 to 8 characters.

Strings in PHP are sequences of characters, and these functions help in processing and modifying them efficiently.

Conclusion-
Thus, we successfully performed string manipulation operations in PHP. This program helped in understanding how to use built-in string functions for processing text data.

VIVA QUESTIONS:

1. What is the purpose of this program?
This program performs string manipulation operations in PHP.
Operations used:
String length
String reverse
Substring extraction

2. What is PHP?
PHP stands for Hypertext Preprocessor. It is a server-side scripting language.

3. What is a string?
A string is a sequence of characters enclosed in quotes.
Example:
$str = "Computer Engineering";

4. What is the use of variable $str?
$str stores the string value "Computer Engineering".

5. Why is $ used before variable name in PHP?
In PHP, all variables start with $.
Example:
$str

6. What is the use of echo?
echo displays output on the webpage.

7. What does strlen() function do?
strlen() returns the length of a string.
Example:
strlen($str)

8. What is the length of "Computer Engineering"?
The length is 20 characters including the space.

9. What does strrev() function do?
strrev() reverses the string.
Example:
strrev($str)

10. What is the output of reverse string?
gnireenignE retupmoC

11. What does substr() function do?
substr() extracts part of a string.
Example:
substr($str, 0, 8)

12. What do 0 and 8 mean in substr($str,0,8)?
0 → Starting position
8 → Number of characters to extract

13. What is the output of substr($str,0,8)?
Computer

14. What is string manipulation?
String manipulation means performing operations on strings like reverse, length, replace, substring, etc.

15. Which operator is used for concatenation in PHP?
The dot . operator is used.
Example:
"Hello " . $name

16. What is the purpose of <br> in echo statements?
<br> creates a line break in HTML output.

17. Is PHP a compiled or interpreted language?
PHP is an interpreted language.

18. Which extension is used for PHP files?
.php
Example:
string.php

19. Which software can run PHP programs?
Examples:
XAMPP
WAMP

20. Can PHP be embedded inside HTML?
Yes, PHP code can be embedded inside HTML pages.
