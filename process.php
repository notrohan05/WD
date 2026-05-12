Exp 10 - Write a PHP program to accept form input and display it using the POST method

<?php
$name = $_POST["name"];
$email = $_POST["email"];

echo "<h2>Form Data Received</h2>";
echo "Name: " . $name . "<br>";
echo "Email: " . $email;

?>
