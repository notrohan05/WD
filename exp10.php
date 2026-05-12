Exp 10 - Write a PHP program to accept form input and display it using the POST method

<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>

<body>

<h2>Enter Your Details</h2>

<form action="process.php" method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>

Aim-
To create a PHP web page that accepts user input through a form and displays the submitted data using the POST method.

Objective-
To understand HTML forms and PHP form handling.
To learn the use of POST method for sending data securely.
To access form data using $_POST superglobal array.
To display user input dynamically using PHP.

Software Requirement-
XAMPP / WAMP Server (for PHP execution)
Text Editor (Notepad / Visual Studio Code / Sublime Text)
Web Browser (Google Chrome / Mozilla Firefox / Microsoft Edge)

Theory-
PHP is a server-side scripting language used for processing form data.

In this program:
An HTML form is created using <form> tag.
action="process.php" specifies that form data will be sent to PHP script.
method="POST" is used to securely send data to the server.
$_POST["name"] and $_POST["email"] are used to retrieve form values.
echo is used to display the submitted data on the webpage.

The POST method hides data from the URL, making it more secure than GET method.

Conclusion-
Thus, we successfully created a PHP program to accept and display form input using the POST method. This program helped in understanding form handling and data processing in PHP.
