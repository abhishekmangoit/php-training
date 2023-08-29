<?php
// error_reporting(E_ALL);
// ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php registration form</title>
</head>
<body>
    <h3>Registration form using post method to store details in database</h3>
    <form action="#" method="POST" >
        <div class="indexDiv">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" placeholder = "Enter first name"/>
        </div>
        <div class="indexDiv">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" placeholder = "Enter last name"/>
        </div>
        <div class="indexDiv">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder = "Enter email"/>
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
        <div class="indexDiv">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder = "Enter password"/>
        </div>
       <div class="btn">
            <button type="submit">Submit</button>
            <a href="displayDetails.php">Show users</a>
       </div>
</form>

<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
    $servername = "localhost";
    $username = "root";
    $password = "Abhi1234$";
    $dbname = "users";

    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("INSERT INTO user (firstname, lastname, email, dob, gender, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $firstname, $lastname, $email, $dob, $gender, $password); 
    $stmt->execute();
    $stmt->close();
    $conn->close();
?>
</body>
</html>

