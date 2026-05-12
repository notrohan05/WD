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

Algorithm:
1. Install and start a web server (XAMPP/WAMP).
2. Open a text editor.
3. Create a new PHP file and save it as form_post.php.
4. Write an HTML form with input fields.
5. Set the form method to POST.
6. Write PHP code to display submitted form data using $_POST.
7. Save the file in the server’s htdocs folder.
8. Open a browser and run the file using http://localhost/form_post.php.
9. Fill the form and submit to verify the output.


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

VIVA QUESTIONS:

1. What is the purpose of this program?
This program collects user details like name and email using an HTML form.

2. What is HTML form?
An HTML form is used to collect input from users.

3. Which tag is used to create a form?
The <form> tag.
Example:
<form>
    
4. What is the use of action attribute?
The action attribute specifies where form data will be sent after submission.
Example:
action="process.php"
    
5. What is process.php?
process.php is a PHP file that processes the submitted form data.

6. What is the use of method="POST"?
The POST method sends form data securely in the background.

7. Difference between GET and POST method?
GET → Sends data through URL
POST → Sends data securely and does not display in URL
    
8. What is the use of <input> tag?
The <input> tag is used to accept user input.

9. What does type="text" mean?
It creates a text input field.

10. What is the purpose of name attribute?
The name attribute identifies form data when sent to the server.
Example:
name="email"
    
11. Why are <br> tags used?
<br> creates line breaks between form elements.

12. What does type="submit" do?
It creates a submit button for the form.

13. What happens when submit button is clicked?
The form data is sent to process.php using POST method.

14. Which data is collected in this form?
Name
Email
    
15. What is server-side processing?
Server-side processing means handling form data on the server using languages like PHP.

16. Which language is generally used in process.php?
PHP

17. What is the difference between frontend and backend?
Frontend → Visible webpage interface
Backend → Server-side processing and logic
    
18. Can this form work without PHP?
The form can display, but submitted data cannot be processed without backend code.

19. Which extension is used for PHP files?
.php
Example:
process.php
    
20. Which software can run HTML and PHP programs?
Examples:
XAMPP
WAMP
Visual Studio Code
