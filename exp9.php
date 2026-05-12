Exp 9 - Write a PHP program to display the current date and time in a welcome page

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>

<div class="container">
    <?php
        // Set the default timezone
        date_default_timezone_set("Asia/Kolkata");

        // Display welcome message
        echo "<h2>Welcome!</h2>";

        // Display current date
        echo "Current Date: " . date("l, d F Y") . "<br><br>";

        // Display current time
        echo "Current Time: " . date("h:i:s A") . "<br>";
    ?>
    
</div>
</body>
</html>


Aim-
To create a PHP web page that displays a welcome message along with the current date and time.

Objective-
To understand basic PHP syntax and structure.
To learn how to embed PHP code inside an HTML page.
To use built-in PHP functions like date() and date_default_timezone_set().
To display dynamic content such as current date and time.

Software Requirement-
XAMPP / WAMP Server (for running PHP)
Text Editor (Notepad / Visual Studio Code / Sublime Text)
Web Browser (Google Chrome / Mozilla Firefox / Microsoft Edge)

Algorithm:
1. Install and start a web server (XAMPP/WAMP).
2. Open a text editor.
3. Create a new PHP file and save it with .php extension.
4. Write PHP code to display a welcome message.
5. Use the date() function to display the current date and time.
6. Save the file in the server’s htdocs folder.
7. Open a web browser and run the file using localhost.
8. Verify the output.

Theory-
PHP (Hypertext Preprocessor) is a server-side scripting language used to create dynamic web pages.

In this program:
PHP code is written inside <?php ... ?> tags.
date_default_timezone_set("Asia/Kolkata") sets the time zone to Indian Standard Time.
date("l, d F Y") is used to display the current date in a readable format.
date("h:i:s A") is used to display the current time in 12-hour format with AM/PM.
echo is used to output text and variables to the web page.

This program demonstrates how PHP can generate dynamic content based on server time.

Conclusion-
Thus, we successfully created a PHP program to display a welcome message along with the current date and time. This helped in understanding basic PHP syntax and dynamic content generation.

VIVA QUESTIONS:

1. What is the purpose of this program?
This program displays a welcome message along with current date and time using PHP.

2. What is PHP?
PHP stands for Hypertext Preprocessor. It is a server-side scripting language used for web development.

3. Why is PHP called a server-side language?
Because PHP code executes on the server before the webpage is sent to the browser.

4. Which tags are used to write PHP code?
PHP code is written inside:
<?php ?>

5. What is the use of echo in PHP?
echo is used to display output on the webpage.
Example:
echo "Welcome!";

6. What does date_default_timezone_set() do?
It sets the default timezone for date and time functions.
Example:
date_default_timezone_set("Asia/Kolkata");

7. Why is "Asia/Kolkata" used?
It sets the timezone according to Indian Standard Time (IST).

8. What is the use of date() function?
The date() function displays the current date or time in a specified format.

9. What does this code display?
date("l, d F Y")
It displays:
Day
Date
Month
Year
Example:
Wednesday, 13 May 2026

10. What does this code display?
date("h:i:s A")
It displays current time in:
Hours
Minutes
Seconds
AM/PM format

11. What is the use of <br> in PHP echo statement?
<br> inserts a line break on the webpage.

12. What is server-side scripting?
Server-side scripting means code runs on the web server before displaying output in browser.

13. What is the difference between HTML and PHP?
HTML creates webpage structure.
PHP performs dynamic server-side operations.

14. Can PHP run without a server?
No, PHP requires a server like:
XAMPP
WAMP

15. What is dynamic content?
Dynamic content changes automatically based on date, time, user input, database, etc.

16. What will happen if timezone is not set?
PHP may show incorrect time based on server default timezone.

17. What is the use of <div> tag in this program?
The <div> tag groups webpage content together.

18. Which function is used for current time?
The date() function.

19. Which extension is used to save PHP files?
PHP files are saved using .php extension.
Example:
welcome.php
    
20. Which software can execute PHP programs?
Examples:
XAMPP
WAMP
Visual Studio Code
