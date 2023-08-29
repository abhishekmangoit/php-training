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
    <title>php form</title>
</head>
<body>
    <h3>Simple form using get method</h3>
    <form action="" method="GET">
        <div>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" placeholder = "Enter first name"/>
        </div>
        <div>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" placeholder = "Enter last name"/>
        </div>
        <div class="genderClass">
            <label for="Gender">Gender:</label>
            <div>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
            </div>
        </div>
        <div class="emailClass">
            <label  for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder = "Enter email"/>
        </div>
        <div class="commentClass">
            <label  for="comment">Comment:</label>
            <input type="textarea" id="comment" name="comment" placeholder = "Enter comment"/>
        </div>
        <button type="submit">Submit</button>
    </form>
    <div id="phpDiv">
        <div><?php if(isset($_GET["firstName"])){echo "First Name : ".str_replace(" ","",$_GET["firstName"]);}else{echo "First Name:";} ?></div>
        <div><?php  if(isset($_GET["lastName"])){echo "Last Name : ".str_replace(" ","",$_GET["lastName"]);}else{echo "Last Name:";} ?></div>
        <div><?php if(isset($_GET["email"])){echo "Email : ".str_replace(" ","",$_GET["email"]);}else{echo "Email:";} ?></div>
        <div><?php if(isset($_GET["gender"])){echo "Gender : ".$_GET["gender"];}else{echo "Gender:";} ?></div>
        <div><?php if(isset($_GET["comment"])){echo "Comment : ".trim($_GET["comment"]);}else{echo "Comment:";} ?></div>             
    </div>
</body>
</html>

