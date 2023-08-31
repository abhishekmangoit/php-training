<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
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
     $usernameError = $passwordError = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["username"])){
                $usernameError = "This field is required";
            }else{
                $usernameError = "";
            }
            if(empty($_POST["password"])){
                $passwordError = "This field is required";
            }else{
                $passwordError = "";
            }
        }
    ?>
    <form action="" method="POST">
        <div class="contain">
            <div class="inputField">
                <label for="username">Username :</label>
                <input type="text" id="username" name="username" placeholder="Enter username">
            </div>
            <span class="error"><?php echo $usernameError;?></span>
        </div>
        <div class="contain">
            <div class="inputField">
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" placeholder="Enter password">
            </div>
            <span class="error"><?php echo $passwordError;?></span>
        </div>
        <input type="submit" value="Login">
    </form>
</body>
</html>