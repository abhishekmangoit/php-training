<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>php registration form</title>
</head>
<body>
    <h3>Registration form using post method</h3>
    <form action="registration.php" method="POST" >
        <div class="indexDiv">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" placeholder = "Enter first name"/>
        </div>
        <div class="indexDiv">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" placeholder = "Enter last name"/>
        </div>
        <div class="indexDiv">
            <label for="userName">Username:</label>
            <input type="text" id="userName" name="userName" placeholder = "Enter username"/>
        </div>
        <div class="indexDiv">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder = "Enter password"/>
        </div>
        <div class="indexDiv">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder = "Enter email"/>
        </div>
        <div class="indexDiv">
            <label for="contact">Phone Number:</label>
            <input type="tel" id="contact" name="contact" placeholder = "Enter phone number"/>
        </div>
        <div class="indexDiv" id="dob">
            <label for="dob">Date Of Birth:</label>
            <input type="date" id="dob" name="dob" />
        </div>
        <div class="indexDiv" id="gender">
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
        </div>
        <button type="submit">Submit</button>
</form>
</body>
</html>

