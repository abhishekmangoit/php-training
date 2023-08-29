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
    <title>Profile Display Page</title>
</head>
<body>
    <?php
       if(isset($_GET['email'])){
        $email = $_GET['email'];
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
                if ($row["email"] === $_GET["email"]) { 
                    $firstname = $row["firstname"];
                    $lastname =  $row["lastname"];
                    $email = $row["email"];
                    $gender = $row["gender"];
                    $dob = $row["dob"];
                }
            }
        }
        ?>
        <div class="displayDiv">
            <h3>hii <?= $firstname ?>, Your details are as follows :</h3>
                    <div class="values">First Name : <?= $firstname ?></div>
                    <div class="values">Last Name : <?= $lastname ?></div>
                    <div class="values">Email : <?= $email ?></div>
                    <div class="values">Gender : <?= $gender ?></div>
                    <div class="values">Date Of Birth :<?= $dob ?></div>
        </div>  
</body>
</html>          