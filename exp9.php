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
