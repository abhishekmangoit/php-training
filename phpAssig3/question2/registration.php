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
    <title>Registration Form Details</title>
</head>
<body>
    <div class="displayDiv">
        <h3>Your details are as follows :</h3>
            <div class="details">
                <div class="labels">First Name :</div>
                <div class="values"><?= trim($_POST["firstName"]); ?></div>
            </div>
            <div class="details">
                <div class="labels">Last Name :</div>
                <div class="values"><?= trim($_POST["lastName"]); ?></div>
            </div>
            <div class="details">
                <div class="labels">Username :</div>
                <div class="values"><?= trim($_POST["userName"]); ?></div>
            </div>
            <div class="details">
                <div class="labels">Password :</div>
                <div class="values"><?= $_POST["password"]; ?></div>
            </div>
            <div class="details">
                <div class="labels">Gender :</div>
                <div class="values"><?php if(isset($_POST["gender"])){echo $_POST["gender"];} ?></div>
            </div>
            <div class="details">
                <div class="labels">Email :</div>
                <div class="values"><?= trim($_POST["email"]); ?></div>
            </div>
            <div class="details">
                <div class="labels">Contact Number :</div>
                <div class="values"><?= trim($_POST["contact"]); ?></div>
            </div>
            <div class="details">
                <div class="labels">Date Of Birth :</div>
                <div class="values"><?php echo $_POST["dob"]; ?></div>
            </div>
    </div>
</body>
</html>
