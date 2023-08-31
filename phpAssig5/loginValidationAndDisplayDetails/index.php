<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>

<body>
    <h3>Login Form</h3>
    <?php

    $emailError = $passwordError = $errorMsg = "";
    function validateEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (empty($_POST["email"])) {
            $emailError = "This field is required";
        } else {
            if (!validateEmail($email)) {
                $emailError = "Invalid email address";
            } else {
                $emailError = "";
            }

        }
        if (empty($_POST["password"])) {
            $passwordError = "This field is required";
        } else {
            $passwordError = "";
        }

        $servername = "localhost";
        $username = "root";
        $password = "Abhi1234$";
        $dbname = "users";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM `user`;";

        $details = $conn->query($sql);

        if ($details->num_rows > 0) {
            while ($row = $details->fetch_assoc()) {
                if ($row["email"] === $_POST["email"] && $row["password"] === $_POST["password"]) {
                    $matchFound = true;
                    $errorMsg = " ";
                    $email = $row["email"];
                    $password = $row["password"];
                    header("Location: profileDisplay.php?email=$email");
                    exit;
                } else {
                    $matchFound = false;
                }
            }
            if(!empty($_POST["email"]) && !empty(($_POST['password']))){
                if (!$matchFound) {
                    $errorMsg = "Invalid email and password entered";
                }
            }
        } else {
            $errorMsg = "No user found";
        }
    }
    ?>
    <form action="" method="POST">
        <div class="contain">
            <div class="inputField">
                <label for="email">Email :</label>
                <input type="text" id="email" name="email" placeholder="Enter email">
            </div>
            <span class="error">
                <?php echo $emailError; ?>
            </span>
        </div>
        <div class="contain">
            <div class="inputField">
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" placeholder="Enter password">
            </div>
            <span class="error">
                <?php echo $passwordError; ?>
            </span>
        </div>
        <input type="submit" value="Login">
    </form>
    <div class="error">
        <?php echo $errorMsg ?>
    </div>
    <?php

    ?>
</body>

</html>
